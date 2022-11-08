<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<script>
    const rangeInputs = document.querySelectorAll('input[type="range"]')
const numberInput = document.querySelector('input[type="number"]')

function handleInputChange(e) {
  let target = e.target
  if (e.target.type !== 'range') {
    target = document.getElementById('range')
  } 
  const min = target.min
  const max = target.max
  const val = target.value
  
  target.style.backgroundSize = (val - min) * 100 / (max - min) + '% 100%'
}

</script>
<style>
    body {
  margin: 0;
  display: flex;
  justify-content: center;
  align-items: center;
  height: 100vh;
  background-image: radial-gradient(rgb(255, 221, 237), rgba(243, 145, 195, 1));
}

input,
output {
  display: inline-block;
  vertical-align: middle;
  font-size: 1em;
  font-family: Arial, sans-serif;
}
</style>
<body>
<div>
  <input type="range" value="70" min="0" max="100" oninput="rangevalue.value=value"/>
  <output id="rangevalue">70</output>

  <br>
  <br>
  <br>
  
  <input type="range" value="70" min="0" max="100" id="range" oninput="rangenumber.value=value"/>
  <input type="number" id="rangenumber" min="0" max="100" value="70" oninput="range.value=value">

</div>
</body>
</html>