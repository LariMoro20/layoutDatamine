<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>MuseMEP</title>
    <meta name="description" content="Acervo de exposições das MEP's" />
    <meta name="author" content="Larissa Moro S. S." />
    <meta name="keywords" content="MEPS, Acervo, IFRS, ADS, museu, meps, acervo, escola, trabalhos, educação, ciência, tecnologia">
    <meta http-equiv="content-language" content="pt-br" />
    <meta name="copyright" content="© 2020 IFRS" />
    <meta name="rating" content="general" />
    <meta name="viewport" content="width=device-width, maximum-scale=5, initial-scale=1, user-scalable=0" />
    <link rel='manifest' href='/manifest.json'>
    <meta property="og:description" content="Acervo de exposições das MEP's" />
    <meta property="og:title" content="MUSEMEP" />
    <meta property="og:locale" content="pt_BR" />
    <meta property="og:image" content="<?= LOGO ?>" />
    <meta property="og:image:type" content="image/png" />
    <meta property="og:image:width" content="400" />
<meta property="og:image:height" content="300" />
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600%7CRaleway:300,400,500,600,700%7CLato:300,400,400italic,600,700" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="<?= DESIGN_PATH ?>iconsfont/css/font-awesome.min.css">
    <link href="<?= DESIGN_PATH ?>bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="<?= CSS_PATH ?>site.css" rel="stylesheet" type="text/css" />

    <link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet"> 
    <link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet"> 
    <script type="text/javascript">
if ('serviceWorker' in navigator) {
  window.addEventListener('load', function() {
    navigator.serviceWorker.register('/service-worker.js');
  });



  if (navigator.serviceWorker.controller) {
    console.log("[PWA Builder] active service worker found, no need to register");
  } else {
    // Register the service worker
    navigator.serviceWorker
      .register("pwabuilder-sw.js", {
        scope: "/"
      })
      .then(function (serviceWorkerRegistration) {
        serviceWorkerRegistration.pushManager.subscribe().then(
            function(pushSubscription) {
                console.log(pushSubscription.subscriptionId);
                console.log(pushSubscription.endpoint);
            }, function(error) {
                console.log(error);
            }
        );
      });
  }
}

   </script>

<script type="application/ld+json">
{
  "@context" : "http://schema.org",
  "@type" : "LocalBusiness",
  "name" : "MUSEMEP",
  "image" : "<?= LOGO ?>",
  "telephone" : "<?=  $configs['telefone']; ?>",
  "email" : "<?=  $configs['email_contato']; ?>",
  "address" : {
    "@type" : "PostalAddress",
    "streetAddress" : "",
    "addressLocality" : "Porto Alegre - RS",
    "addressCountry" : "Brasil, Rio Grande do Sul",
    "postalCode" : ""
  }
}
</script>


<style>
.pagination {
    display: block;
}
.pagination ul > li {
    display: inline-block;
    margin-right: 2px;
    margin-bottom: 20px;
}
.pagination ul {
    -webkit-box-shadow: none;
    -moz-box-shadow: none;
    box-shadow: none;
    list-style: none;
    padding: 0;
    margin: 0;
        margin-top: 0px;
    margin-top: 40px;
}
.pagination {
    display: inline-block;
    padding-left: 0;
    margin: 20px 0;
    border-radius: 4px;
}
.pagination ul > li > a, .pagination ul > li > span {
    float: none;
    background: none;
    color: #2e2e2e !important;
    border: 1px solid rgba(0,0,0,0.35);
    text-transform: uppercase;
    font-weight: 600;
    font-size: 14px;
    padding: 11px 13px 11px;
}
</style>
</head>
