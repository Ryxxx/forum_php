<?php
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
</div>
<footer class="page-footer">
    <div class="container">
        
    </div>
    <div class="footer-copyright">
        <div class="container">
            © 2014 Copyright Text
            <a class="grey-text text-lighten-4 right" href="#!">RYAN LA PUTE</a>
        </div>
    </div>
</footer>
    
    
</div><!-- /.row-fluid -->
    
    
</body>
    
    
<!-- Le javascript
    ================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<!-- Compiled and minified JavaScript -->
<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
<script src="<?php echo __SITE_URL; ?>/js/main.js"></script>
<script>
    function addpanier(id_)
    {
        jQuery.ajax({
            type: 'POST', // Le type de ma requete
            url: '<?php echo __SITE_URL; ?>/panier/add/', // L'url vers laquelle la requete sera envoyee
            data: {
                id: id_ // Les donnees que l'on souhaite envoyer au serveur au format JSON
            },
            success: function(data) {
                document.getElementById("nb_article").innerHTML = data;
            },
            error: function() {
                alert("planté");
            }
        });
    }
</script>
</html>