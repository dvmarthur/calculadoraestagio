<script>


    function insert(num) {

        document.getElementById('result').innerHTML += num;

    }

    function delet() {

        var resultado = document.getElementById('result').innerHTML;
        document.getElementById('result').innerHTML = resultado.substring(0, resultado.length - 1);
    }

    function clean() {

        document.getElementById('result').innerHTML = "";
    }

     function calcula() {

        var resultado = document.getElementById('result').innerHTML;
        if (resultado) {
            document.getElementById('result').innerHTML = eval(resultado);           
            
        }
        

    }
</script>