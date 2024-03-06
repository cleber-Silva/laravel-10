<!-- <!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listagem</title>
</head>
    <body> -->
        <h1>Listagem de suporte</h1>

        <a href="{{route('supports.create')}}" >Criar nova Duvida</a>

        <table>
            <thead>
                <th>Assunto</th>
                <th>Status</th>
                <th>Descrição</th>
                <th></th>
            </thead>
            <tbody>
                <?php foreach ($supports as $support) : ?>
                    <tr>
                        <td><?=$support->subject?></td>
                        <td><?=$support->status?></td>
                        <td><?=$support->body?></td>
                        <td></td>
                    </tr>
                <?php endforeach; ?>    
            </tbody>

        </table>



                <!-- <div class='form_container p-4 mb-5'>
                    <div class="row">
                        <div class="col-2 p-2 pb-5">
                            <label>Assunto</label>
                        </div>
                        <div class="col-2 p-2">
                            <label for="frm_filtro_ano">Status</label>
                            <script>
                                const yearInput = document.getElementById('frm_filtro_ano');
                                    yearInput.addEventListener('input', () => {
                                    const year = yearInput.value.replace(/\D/g, '').substring(0, 4);
                                    yearInput.value = year;
                                });
                            </script>
                        </div>
                        <div class="col-2 p-2">
                            <label for="frm_categoria">Descricao</label>
                        </div>
                    </div>
                    <div class="row float-end">
                        <div class="col ">
                            <button type=submit name='comportamento' value='gerarPDF' class="btn btn-outline-danger btn-sm">Gerar PDF</button>
                        </div>                      
                    </div> -->

    <!-- </body>
</html>                     -->
                