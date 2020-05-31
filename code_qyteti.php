<script>
document.addEventListener("DOMContentLoaded", function(e) {
    x = document.getElementsByTagName("option");
    console.log(x);
    for(i =0; i< x.length; i++){
        if (x[i].value == <?php echo $qyteti; ?>)
        {
           
        x[i].selected='selected';
        }
    }
})
</script>

<style>
    select{
    padding: .375rem .75rem;
    font-size: 1rem;
    line-height: 1.5;
    color: #495057;
    background-color: #fff;
    background-clip: padding-box;
    border: 1px solid #ced4da;
    border-radius: .25rem;
    width:100%;
}
</style>