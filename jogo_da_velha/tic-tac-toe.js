const tic_tac_toe = {

    // ATTRIBUTES
    board: ['', '', '', '', '', '', '', '', ''],
    symbols: {
        options: ['O', 'X'],
        turn_index: 0,
        change: function () {
            this.turn_index = (this.turn_index === 0 ? 1 : 0);
        }
    },
    container_element: null,
    gameover: false,
    winning_sequences: [
        [0, 1, 2],
        [3, 4, 5],
        [6, 7, 8],
        [0, 3, 6],
        [1, 4, 7],
        [2, 5, 8],
        [0, 4, 8],
        [2, 4, 6]
    ],

    // FUNCTIONS
    init: function (container) {
        this.container_element = container;
    },

    make_play: function (position) {
        if (this.gameover) return false;
        if (this.board[position] === '') {
            this.board[position] = this.symbols.options[this.symbols.turn_index];
            this.draw();
            let winning_sequences_index = this.check_winning_sequences(this.symbols.options[this.symbols.turn_index]);
            if (winning_sequences_index >= 0) {
                this.game_is_over();
            } else {
                this.symbols.change();
            }
            return true;
        }
        else {
            return false;
        }
    },

    check_winning_sequences: function (symbol) {

        for (i in this.winning_sequences) {
            if (this.board[this.winning_sequences[i][0]] == symbol &&
                this.board[this.winning_sequences[i][1]] == symbol &&
                this.board[this.winning_sequences[i][2]] == symbol) {
                console.log('winning sequences INDEX:' + i);
                this.paint(symbol, i);
                return i;
            }
        };
        return -1;
    },

    paint: function (symbol, sequence) {
        let pos1 = document.getElementById("pos" + this.winning_sequences[sequence][0]);
        pos1.classList.add("win");
        pos1.classList.remove("pos");

        let pos2 = document.getElementById("pos" + this.winning_sequences[sequence][1]);
        pos2.classList.add("win");
        pos2.classList.remove("pos");

        let pos3 = document.getElementById("pos" + this.winning_sequences[sequence][2]);
        pos3.classList.add("win");
        pos3.classList.remove("pos");
    },

    game_is_over: function () {
        this.gameover = true;
        console.log('GAME OVER');
    },

    start: function () {
        this.board.fill('');
        this.draw();
        this.gameover = false;
    },

    draw: function () {
        let content = '';

        for (i in this.board) {
            content += '<div class="pos" id="pos' + i + '" onclick="tic_tac_toe.make_play(' + i + ')">' + this.board[i] + '</div>';
        };

        this.container_element.innerHTML = content;
    },
}; 