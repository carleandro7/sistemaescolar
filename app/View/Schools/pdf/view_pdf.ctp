<html>
    <head>
        <style="text/css">
            body {
            font-family: Courier New;
            margin: 0;
            padding: 0;
            border: none;
            font-size: 18px;
            }
            #exemplo {
            width: 100%;
            height: auto;
            overflow: hidden;
            padding: 5px 0;
            text-align: left;
            }
            #data {
            height: auto;
            overflow: hidden;
            padding: 5px 0;
            text-align: right;
            font-size: 12px;
            }
    </style>
</head>
<body>
    <div id="data">
        <?php   echo $this->Time->format('d/m/Y' , time()); ?>
    </div>
    <div id="exemplo">
    <b><a> Dados da Escola: </a></b> <?php echo $school['School']['nome']; ?>
    </div>
    <hr  width="100%" size="3"  align="left">  
    <table >
    <tr>
        <td><b>Zona: </b><?php echo $school['School']['zona']; ?></td>
        <td colspan="2"><b>Bairro: </b><?php echo $school['School']['bairro']; ?></td>
    </tr>
     <tr>
        <td colspan="3"><b>Logradouro: </b><?php echo $school['School']['logradouro']; ?></td>
    </tr>
    <tr>
        <td><b>Número: </b><?php echo $school['School']['numero']; ?></td>
        <td><b>Cidade: </b><?php echo $school['School']['cidade']; ?></td>
        <td><b>Estado: </b><?php echo $school['School']['estado']; ?></td>
    </tr>
    <tr>
        <td><b>Telefone: </b><?php echo $school['School']['telefone']; ?></td>
        <td colspan="2"><b>Email: </b><?php echo $school['School']['email']; ?></td>
    </tr>
    <tr>
        <td colspan="3"><b>Razão social: </b><?php echo $school['School']['razaosocial']; ?></td>
    </tr>
    <tr>
        <td colspan="2"><b>CNPJ: </b><?php echo $school['School']['cnpj']; ?></td>
        <td><b>CEP: </b><?php echo $school['School']['cep']; ?></td>
    </tr>
    </table>
    
    
    
    
    </body>
    </html>