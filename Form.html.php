<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="box">
        <div class="box-header">
            <h1>Calculator</h1>
            <p>Select a function, enter values, and calculate.</p>
        </div>

        <form action="" method="post">
            <div class="ops-label">Choose Function</div>
            <div class="ops-grid">
                <input type="radio" name="calc" id="op_area" value="area" checked>
                <label for="op_area">
                    <span class="op-name">Calc Area</span>
                    <span class="op-formula">a × b</span>
                </label>

                <input type="radio" name="calc" id="op_perimeter" value="perimeter">
                <label for="op_perimeter">
                    <span class="op-name">Calc Perimeter</span>
                    <span class="op-formula">(a+b) × 2</span>
                </label>

                <input type="radio" name="calc" id="op_average" value="average">
                <label for="op_average">
                    <span class="op-name">Calc Average</span>
                    <span class="op-formula">(a+b) / 2</span>
                </label>

                <input type="radio" name="calc" id="op_bmi" value="bmi">
                <label for="op_bmi">
                    <span class="op-name">Calc BMI</span>
                    <span class="op-formula">w / h²</span>
                </label>

                <input type="radio" name="calc" id="op_totalmin" value="totalmin">
                <label for="op_totalmin">
                    <span class="op-name">Total Minutes</span>
                    <span class="op-formula">h×60 + m</span>
                </label>

                <input type="radio" name="calc" id="op_maxval" value="maxval">
                <label for="op_maxval">
                    <span class="op-name">Find Max</span>
                    <span class="op-formula">max(a, b)</span>
                </label>
            </div>

            <div class="inputs-section">
                <div class="field">
                    <label for="val1" id="label1">Width</label>
                    <input type="text" name="val1" id="val1" placeholder="e.g. 5" autocomplete="off">
                </div>
                <div class="field">
                    <label for="val2" id="label2">Height</label>
                    <input type="text" name="val2" id="val2" placeholder="e.g. 10" autocomplete="off">
                </div>
            </div>

            <div class="actions">
                <input type="submit" class="btn-calc" value="Calculate">
                <input type="reset" class="btn-clear" value="Clear">
            </div>
        </form>
    </div>

    <script>
        const configs = {
            area: { l1: "Width", l2: "Height", p1: "e.g. 5", p2: "e.g. 10" },
            perimeter: { l1: "Width", l2: "Height", p1: "e.g. 5", p2: "e.g. 10" },
            average: { l1: "Value 1", l2: "Value 2", p1: "e.g. 8", p2: "e.g. 12" },
            bmi: { l1: "Weight (kg)", l2: "Height (m)", p1: "e.g. 70", p2: "e.g. 1.75" },
            totalmin: { l1: "Hours", l2: "Minutes", p1: "e.g. 2", p2: "e.g. 45" },
            maxval: { l1: "Value 1", l2: "Value 2", p1: "e.g. 15", p2: "e.g. 23" }
        };

        function updateLabels(op) {
            const c = configs[op];
            if (!c) return;
            document.getElementById('label1').textContent = c.l1;
            document.getElementById('label2').textContent = c.l2;
            document.getElementById('val1').placeholder = c.p1;
            document.getElementById('val2').placeholder = c.p2;
        }

        document.querySelectorAll('input[name="calc"]').forEach(radio => {
            radio.addEventListener('change', () => updateLabels(radio.value));
        });

        // Init on load
        const checked = document.querySelector('input[name="calc"]:checked');
        if (checked) updateLabels(checked.value);
    </script>
</body>
</html>