<?php
//include auth.php file on all secure pages
include("auth.php");
?>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
  <title>Bitcoin -- Nueva forma de dinero</title>
   <a href="index.php">
  <img class="BitcoinLogo" src="https://upload.wikimedia.org/wikipedia/commons/thumb/c/c5/Bitcoin_logo.svg/2000px-Bitcoin_logo.svg.png" alt="BITCOIN" >
</a>
    
  <link rel="stylesheet" type="text/css" href="bitcoin.css">
  <div id="header">
      <ul class="nav">
        <li><a href="personal.php">Personal</a>
        </li>
        <li><a href="empresarial.php">Empresarial</a>
        </li>
        <li><a href="vivo.php">Precio en Vivo</a>
        </li>
        <li><a href="cripto.php">Explicación Criptográfica</a>
        </li>
        <li><a href="contacto.php">Contacto</a></li>
        <li><a href="https://bitcoin.org/bitcoin.pdf">Paper</a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>

    </div>
  </head>
    <body>
        <br clear="both">
        <center><i>Contacte con Nosotros</i></center>
        <br>
        <br>
        <br>
    <form action="gracias.html" method="post">
    <fieldset>
        <label for="name">Nombre:</label>
        <input type="text" id="name" name="name" />
        <br>
        <br>
    <label>Género:</label>
    <label><input type="radio" name="genero" value="masculino"> Masculino</label>
    <label><input type="radio" name="genero" value="femenino"> Femenino</label>
    <br>
    <br>
    <label for="text">Fecha de Nacimiento</label>
     <input type="date" min="12" max="100" id="age">
    <br>
    <br>
        <label for="mail">E-mail:</label>
        <input type="email" id="mail" name="email"required placeholder="@" />
        <br>
        <br>
         <label for="tel">Teléfono Móvil</label>
        <input type="number" id="telefono" name="telefono" />
        <br>
        <br>
    </fieldset>
    <fieldset>
    <label>Contacto Referente a:</label>
    <select name="entretenimiento">
      <option>Personal</option>
      <option>Empresarial</option>
      <option>Precio</option>
      <option>Explicación</option>
      <option>Otros Temas</option>
    </select>
    <br>
        <br>
         <label for="mensaje">Mensaje: </label>
        <input style="height: 100px " type="text" id="mensaje" name="mensaje" />
    </fieldset>
    <div class="button">
        <br>
        <center><button type="submit">Enviar</button>
        </center>
</audio> 
</form>
 <footer>
    <!-- TradingView Widget BEGIN -->
<div class="tradingview-widget-container">
  <div class="tradingview-widget-container__widget"></div>
  <div class="tradingview-widget-copyright"><a href="https://es.tradingview.com" rel="noopener" target="_blank"><span class="blue-text">Cotizaciones</span></a> por TradingView</div>
  <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-tickers.js" async>
  {
  "symbols": [
    {
      "title": "S&P 500",
      "proName": "INDEX:SPX"
    },
    {
      "title": "Nasdaq 100",
      "proName": "INDEX:IUXX"
    },
    {
      "title": "EUR/USD",
      "proName": "FX_IDC:EURUSD"
    },
    {
      "title": "BTC/USD",
      "proName": "BITFINEX:BTCUSD"
    },
    {
      "title": "ETH/USD",
      "proName": "BITFINEX:ETHUSD"
    },
    {
      "description": "BTC/EU",
      "proName": "COINBASE:BTCEUR"
    }
  ],
  "locale": "es"
}
  </script>
</div>
<!-- TradingView Widget END -->
    <div class="footer">
      Esta página ha sido creada por Diego Abdul, estudiante de la Universidad Europea de Madrid.
    </div>
  </footer>
  </html>