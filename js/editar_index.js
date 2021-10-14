function editar(id, txt_tarefa){
    //form de edição
    let form = document.createElement('form')
    form.action = '../public/index.php?pag=index&acao=atualizar'
    form.method = 'post'
    form.className = 'row'


    //input para entrada do texto
    let inputTarefa = document.createElement('input')
    inputTarefa.type = 'text'
    inputTarefa.name = 'tarefa'
    inputTarefa.className = 'col-9 form-control'
    inputTarefa.value = txt_tarefa

    //input hidden para guardar o id da tarefa
    let inputId = document.createElement('input')
    inputId.type = 'hidden'
    inputId.name = 'id'
    inputId.value = id

    //button para envio de form
    let button = document.createElement('button')
    button.type = 'submit'
    button.className = 'col-3 btn btn-info'
    button.innerHTML = 'Atualizar'

    //arvore de elementos 

    //incluir inputTarefa no form
    form.appendChild(inputTarefa)

    //incluir o inputId no form
    form.appendChild(inputId)

    //incluir button no form
    form.appendChild(button)

    
    /*//teste
    console.log(form)
    alert(id)*/

    //selecionar a div tarefa
    let tarefa = document.getElementById('tarefa_'+id)

    //limpar o texto da tarefa para inclusão do form
    tarefa.innerHTML = ''

    //incluir form na página
    tarefa.insertBefore(form, tarefa[0])//permite fazer uma arvore de elementos html dentro de um elemento que foi atualizado dentro da página e um metodo nativo do DOM

    //alert(txt_tarefa)
}

function remover(id){
    location.href = '../public/index.php?pag=index&acao=remover&id='+id
}

function marcarRealizada(id){
    location.href = '../public/index.php?pag=index&acao=marcarRealizada&id='+id
    
}