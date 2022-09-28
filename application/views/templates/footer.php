
<script>
    let inputLabel = document.getElementById('inputLabel');


    // Will take 1 parameter from pushBtn(this) then rename it to (obj) inside the function
    function pushBtn(obj) {

        let pushed = obj.innerHTML;

        if (pushed == '=')
        {
            inputLabel.innerHTML = eval(inputLabel.innerHTML);
        }
        else if( pushed == 'AC') 
        {
            inputLabel.innerHTML = 0;
        } else 
        {
            if (inputLabel.innerHTML == '0')
            {
                inputLabel.innerHTML = pushed;
            }else{
                inputLabel.innerHTML += pushed;
            }
        }
    }

</script>



</body>
</html>