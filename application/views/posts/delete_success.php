<?
function phpAlert() {
    echo '<script type="text/javascript">
    alert("Success");
    location.href="'.base_url('posts/delete').'";
    </script>';
    
}

phpAlert();

?>