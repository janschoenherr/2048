@style('2048.main', '2048/style/main.css')

@script('2048.bind_polyfill', '2048/js/bind_polyfill.js')
@script('2048.classlist_polyfill', '2048/js/classlist_polyfill.js')
@script('2048.animframe_polyfill', '2048/js/animframe_polyfill.js')
@script('2048.keyboard_input_manager', '2048/js/keyboard_input_manager.js')
@script('2048.html_actuator', '2048/js/html_actuator.js')
@script('2048.grid', '2048/js/grid.js')
@script('2048.tile', '2048/js/tile.js')
@script('2048.local_storage_manager', '2048/js/local_storage_manager.js')
@script('2048.game_manager', '2048/js/game_manager.js')
@script('2048.application', '2048/js/application.js')

<div class="container">
    <div class="heading">
        <h1 class="title">2048</h1>
        <div class="scores-container">
            <div class="score-container">0</div>
            <div class="best-container">0</div>
            <a class="restart-button">New Game</a>
        </div>
    </div>

    <div class="game-container">
        <div class="game-message">
            <p></p>
            <div class="lower">
                <a class="keep-playing-button">Keep going</a>
                <a class="retry-button">Try again</a>
            </div>
        </div>

        <div class="grid-container">
            <div class="grid-row">
                <div class="grid-cell"></div>
                <div class="grid-cell"></div>
                <div class="grid-cell"></div>
                <div class="grid-cell"></div>
            </div>
            <div class="grid-row">
                <div class="grid-cell"></div>
                <div class="grid-cell"></div>
                <div class="grid-cell"></div>
                <div class="grid-cell"></div>
            </div>
            <div class="grid-row">
                <div class="grid-cell"></div>
                <div class="grid-cell"></div>
                <div class="grid-cell"></div>
                <div class="grid-cell"></div>
            </div>
            <div class="grid-row">
                <div class="grid-cell"></div>
                <div class="grid-cell"></div>
                <div class="grid-cell"></div>
                <div class="grid-cell"></div>
            </div>
        </div>

        <div class="tile-container">

        </div>
    </div>

    <p class="game-intro">Join the numbers and get to the <strong>2048 tile!</strong></p>
    <hr>
    <p class="game-explanation">
        <strong class="important">How to play:</strong> Use your <strong>arrow keys</strong> to move the tiles. When two tiles with the same number touch, they <strong>merge into one!</strong>
    </p>

</div>