<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Juego de la Vida</title>
    <style>
        body {
            background: #111;
            color: white;
            font-family: sans-serif;
            margin: 0;
            padding: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
        }

        h1 {
            margin-bottom: 10px;
        }

        p {
            margin-top: 0;
            font-size: 16px;
            line-height: 1.6;
            max-width: 600px;
            text-align: justify;
        }

        #canvas-container {
            width: 100%;
            max-width: 600px;
            border: 2px solid #0f0;
            margin-top: 20px;
        }

        canvas {
            width: 100%;
            height: auto;
            display: block;
        }

        #controls {
            margin-top: 20px;
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
            justify-content: center;
        }

        button {
            flex: 1 1 auto;
            min-width: 100px;
            background-color: #222;
            color: #0f0;
            border: 2px solid #0f0;
            padding: 10px;
            font-size: 16px;
            border-radius: 8px;
            cursor: pointer;
            transition: 0.2s;
        }

        button:hover {
            color: #0f0;
        }

        @media (max-width: 500px) {
            button {
                font-size: 14px;
                padding: 8px;
            }
        }
    </style>
</head>

<body>
    <h1>GAME OF LIFE / JUEGO DE LA VIDA</h1>
    <p>
        Imagina que tienes una cuadrícula con muchas casillas, cada una de las cuales puede tener una "estrella" o no.
        Las estrellas siguen un conjunto de reglas para decidir si siguen vivas o desaparecen. Dependiendo de la
        cantidad de estrellas vecinas, las estrellas pueden nacer, morir o mantenerse vivas.
        <br><br>
        Las reglas son las siguientes:
        <br><br>
        1. Si una casilla tiene 2 o 3 estrellas vecinas, la estrella sigue viva.
        <br>
        2. Si tiene menos de 2 estrellas, la estrella muere por estar sola.
        <br>
        3. Si tiene más de 3 estrellas, la estrella también muere porque tiene demasiados amigos.
        <br>
        4. Si una casilla está vacía y tiene exactamente 3 estrellas vecinas, una nueva estrella aparece en esa casilla.
        <br><br>
        Estas reglas hacen que el tablero cambie constantemente, con estrellas naciendo y muriendo según las reglas. ¡Es
        como un juego donde las estrellas tienen que seguir las reglas para decidir si se quedan o se van!
    </p>

    <div id="canvas-container">
        <canvas id="game" width="500" height="500"></canvas>
    </div>

    <div id="controls">
        <button id="refreshBtn">🔄 Refrescar</button>
        <button id="stopBtn">Pausar</button>
        <button id="continueBtn" style="display: none;">Continuar</button>
        <button id="addRandomBtn">Dar Vida</button>
    </div>

    <script>
        const canvas = document.getElementById("game");
        const ctx = canvas.getContext("2d");
        const refreshBtn = document.getElementById("refreshBtn");
        const stopBtn = document.getElementById("stopBtn");
        const continueBtn = document.getElementById("continueBtn");
        const addRandomBtn = document.getElementById("addRandomBtn");

        const cellSize = 2;
        const cols = Math.floor(canvas.width / cellSize);
        const rows = Math.floor(canvas.height / cellSize);

        let grid = [];
        let running = true;
        let addLifeInterval = null;

        const dyingCells = new Map();

        function generateGrid() {
            dyingCells.clear();
            return Array.from({ length: rows }, () =>
                Array.from({ length: cols }, () => Math.random() < 0.2 ? 1 : 0)
            );
        }

        function drawGrid() {
            ctx.clearRect(0, 0, canvas.width, canvas.height);
            const now = Date.now();
            for (let y = 0; y < rows; y++) {
                for (let x = 0; x < cols; x++) {
                    const key = `${y},${x}`;
                    const dyingTime = dyingCells.get(key);

                    if (grid[y][x]) {
                        ctx.fillStyle = "#00ff88"; // Viva normal
                    } else if (dyingTime && now - dyingTime < 2000) {
                        ctx.fillStyle = "#18230F"; // Muere: rojo por 1s
                    } else {
                        ctx.fillStyle = "#111"; // Muerta normal
                        dyingCells.delete(key); // Limpieza
                    }

                    ctx.fillRect(x * cellSize, y * cellSize, cellSize, cellSize);
                }
            }
        }

        function countNeighbors(y, x) {
            let sum = 0;
            for (let i = -1; i <= 1; i++) {
                for (let j = -1; j <= 1; j++) {
                    if (i === 0 && j === 0) continue;
                    const row = (y + i + rows) % rows;
                    const col = (x + j + cols) % cols;
                    sum += grid[row][col];
                }
            }
            return sum;
        }

        function updateGrid() {
            const next = grid.map(arr => [...arr]);
            const now = Date.now();

            for (let y = 0; y < rows; y++) {
                for (let x = 0; x < cols; x++) {
                    const neighbors = countNeighbors(y, x);
                    if (grid[y][x] === 1) {
                        if (neighbors < 2 || neighbors > 3) {
                            next[y][x] = 0;
                            dyingCells.set(`${y},${x}`, now);
                        }
                    } else {
                        next[y][x] = neighbors === 3 ? 1 : 0;
                    }
                }
            }

            grid = next;
        }

        function gameLoop() {
            if (running) {
                drawGrid();
                updateGrid();
                requestAnimationFrame(gameLoop);
            }
        }

        function addRandomCells() {
            for (let i = 0; i < 500; i++) {
                const randY = Math.floor(Math.random() * rows);
                const randX = Math.floor(Math.random() * cols);
                grid[randY][randX] = 1;
            }
            drawGrid();
        }

        refreshBtn.addEventListener("click", () => {
            grid = generateGrid();
            drawGrid();
            if (!running) {
                running = true;
                gameLoop();
            }
        });

        stopBtn.addEventListener("click", () => {
            running = false;
            stopBtn.style.display = 'none';
            continueBtn.style.display = 'inline-block';
            refreshBtn.style.display = 'none'; // Ocultar botón "Dar Vida"
            addRandomBtn.style.display = 'none'; // Ocultar botón "Dar Vida"
            clearInterval(addLifeInterval);
            addLifeInterval = null;
            addRandomBtn.textContent = "Iniciar";



        });

        continueBtn.addEventListener("click", () => {
            if (!running) {
                running = true;
                gameLoop();
                stopBtn.style.display = 'inline-block';
                continueBtn.style.display = 'none';
                addRandomBtn.style.display = 'inline-block'; // Volver a mostrar el botón "Dar Vida"
                refreshBtn.style.display = 'inline-block'; // Ocultar botón "Dar Vida"
            }
        });

        addRandomBtn.addEventListener("click", () => {
            if (addLifeInterval === null) {
                addLifeInterval = setInterval(addRandomCells, 10);
                addRandomBtn.textContent = "Detener";
                refreshBtn.style.display = 'none'; // Ocultar botón "Dar Vida"
            } else {
                clearInterval(addLifeInterval);
                addLifeInterval = null;
                addRandomBtn.textContent = "Iniciar";
                refreshBtn.style.display = 'inline-block'; // Ocultar botón "Dar Vida"
                
            }
        });

        grid = generateGrid();
        gameLoop();
    </script>
</body>

</html>