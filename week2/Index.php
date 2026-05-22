<?php
if (!isset($_POST['val1'])) {
    include __DIR__ . '/templates/form.html.php';
} else {
    $val1 = $_POST['val1'] ?? '';
    $val2 = $_POST['val2'] ?? '';
    $calc = $_POST['calc'] ?? '';
    
    if (is_numeric($val1) && is_numeric($val2)) {
        switch ($calc) {
            case "area":
                $result = $val1 * $val2;
                $output = "Area = " . $result;
                $detail = "Formula: input1 × input2 = {$val1} × {$val2}";
                break;

            case "perimeter":
                $result = ($val1 + $val2) * 2;
                $output = "Perimeter = " . $result;
                $detail = "Formula: (input1 + input2) × 2 = (($val1) + ($val2)) × 2";
                break;

            case "average":
                $result = ($val1 + $val2) / 2;
                $output = "Average = " . $result;
                $detail = "Formula: (input1 + input2) / 2 = (($val1) + ($val2)) / 2";
                break;

            case "bmi":
                if ($val2 == 0) {
                    $error = "Height cannot be zero!";
                    include __DIR__ . '/templates/error.html.php';
                    exit;
                }
                $bmi = $val1 / ($val2 * $val2);
                $result = round($bmi, 2);
                if ($bmi < 18.5) {
                    $category = "Underweight";
                } elseif ($bmi < 25.0) {
                    $category = "Normal weight";
                } elseif ($bmi < 30.0) {
                    $category = "Overweight";
                } else {
                    $category = "Obese";
                }
                $output = "BMI = {$result} ({$category})";
                $detail = "Formula: weight / height² = {$val1} / {$val2}²";
                break;

            case "totalmin":
                $result = ($val1 * 60) + $val2;
                $output = "Total Minutes = {$result} minutes";
                $detail = "Formula: hours × 60 + minutes = {$val1} × 60 + {$val2}";
                break;

            case "maxval":
                $result = max($val1, $val2);
                $output = "Max Value = " . $result;
                $detail = "Formula: max({$val1}, {$val2})";
                break;

            default:
                $error = "Invalid operation selected.";
                include __DIR__ . '/templates/error.html.php';
                exit;
        }
        
        include __DIR__ . '/templates/result.html.php';
    } else {
        $error = "Invalid entry - please enter numbers only.";
        include __DIR__ . '/templates/error.html.php';
    }
}
?>