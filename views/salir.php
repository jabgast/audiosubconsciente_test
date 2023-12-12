<?php
session_start();
session_destroy();
echo "<script>
        alert('¡ADIOS!');
        window.location.href = '../';
        </script>";
?>