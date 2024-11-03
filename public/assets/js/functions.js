// Função para atualizar o conteúdo de dentro do modal
function ModalRefresh(conteudo, modalId) {
    document.getElementById(modalId).innerText = conteudo;
}

// Função para confirmar a exclusão
function confirmDelete(id) {
    // Configura a rota
    const form = document.getElementById('deleteForm');
    form.action = `/warehouse/${id}`;

    // Abre o modal
    const deleteModal = new bootstrap.Modal(document.getElementById('deleteModal'));
    deleteModal.show();
}

// calcula o preco final em relação ao preço de produção e margem de lucro
function calcularPrecoFinal() {
    let precoCusto = parseFloat(document.getElementById('preco_custo').value) || 0;
    let margemLucro = parseFloat(document.getElementById('margem').value) || 0;
    if (isNaN(precoCusto)) precoCusto = 0;
    if (isNaN(margemLucro)) margemLucro = 0;
    let precoFinal = precoCusto + (precoCusto * margemLucro / 100);
    document.getElementById('preco_final').value = precoFinal.toFixed(2);
}

// limpa os campos de cadastro
function ClearInputs() {
    document.getElementsByTagName('texarea', 'input').value = "";
}

// identifica o titulo da coluna e adiciona o evento de click
document.querySelectorAll('th').forEach((th, index) => {
    th.addEventListener('click', () => sortTable(index));
});

// função de ordenação da lista ao clicar no TH
function sortTable(columnIndex) {
    const table = document.querySelector('table');
    const rows = Array.from(table.querySelectorAll('tbody tr'));
    const isAscending = table.dataset.sortOrder === 'asc';
    rows.sort((rowA, rowB) => {
        const cellA = rowA.cells[columnIndex].textContent.trim().toLowerCase();
        const cellB = rowB.cells[columnIndex].textContent.trim().toLowerCase();

        if (!isNaN(cellA) && !isNaN(cellB)) {
            return isAscending ? cellA - cellB : cellB - cellA;
        } else {
            return isAscending ? cellA.localeCompare(cellB) : cellB.localeCompare(cellA);
        }
    });
    rows.forEach(row => table.querySelector('tbody').appendChild(row));
    table.dataset.sortOrder = isAscending ? 'desc' : 'asc';

    const headers = table.querySelectorAll('th'); headers.forEach(header => {
        header.classList.remove('bg-primary');
        header.style.color = "";
    });

    headers[columnIndex].classList.add('bg-primary');
    headers[columnIndex].style.color = "white";


}


// Funcão de pesquisa, barra de pesquisa da tabela
document.getElementById('search').addEventListener('input', function () {
    const query = this.value.trim().toLowerCase();
    const rows = document.querySelectorAll('#table-body tr');
    if (query === '') {
        rows.forEach(row => {
            row.style.display = '';
        });
        return;
    }
    rows.forEach(row => {
        const cells = Array.from(row.cells);
        const match = cells.some(cell => cell.textContent.toLowerCase().includes(query));
        row.style.display = match ? '' : 'none';
    });
});



// não está funcionando como deveria
function buscarDadosCNPJ(cnpj , campus = []) {
    const cnpjValue = document.getElementById(cnpj).value.replace(/\D/g, "");
    if (cnpjValue.length === 14) {
        const url = `https://brasilapi.com.br/api/cnpj/v1/${cnpjValue}`;
        fetch(url)
            .then(response => {
                if (!response.ok) {
                    if (response.status === 404) throw new Error("CNPJ não encontrado");
                    throw new Error("Erro ao fazer a requisição");
                }
                return response.json();
            })
            .then(data => preencherDadosCNPJ(data, campus))
            .catch(error => alert(error.message));
    } 
    else {
        alert("CNPJ inválido. Deve conter 14 dígitos.");
    }
}

function preencherDadosCNPJ(data, campus = []) {
    if(data.descricao_situacao_cadastral.toLowerCase() == 'ativa'){
        document.getElementById(campus[0]).value = data.razao_social || "";
        document.getElementById(campus[1]).value = data.cep || "";
    }
    else {alert('CNPJ inativo, digite um CNPJ ativo ou Cadastre-se com CPF');}
}


// limpar botões inputs

function clearInputs(classe) {
    const inputs = document.querySelectorAll(classe+' , input');
    inputs.forEach(input => input.value = "");
}

// função para mostrar ou/e esconder campos
/*
function toggleSwitch(divs = [], btns = []) {
    const button = document.getElementById("toggleButton");
    const pessoaFisica = document.getElementById("dados_pessoa_fisica_new");
    const pessoaJuridica = document.getElementById("dados_pessoa_juridica_new");

    if (button.classList.contains("btn-secondary")) {
        button.classList.remove("btn-secondary");
        button.classList.add("btn-success");
        button.textContent = " Pessoa Júridica";
        pessoaFisica.classList.add("d-none");
        pessoaJuridica.classList.remove("d-none");
    } else {
        button.classList.remove("btn-success");
        button.classList.add("btn-secondary");
        button.textContent = " Pessoa Fisica";
        pessoaFisica.classList.remove("d-none");
        pessoaJuridica.classList.add("d-none");
    }
}*/


function ShowORHide(div1, div2, radioInputId) {
    const radios = document.getElementsByName(radioInputId);
    let valorSelecionado;
    for (const radio of radios) {
        if (radio.checked) {
            valorSelecionado = radio.value; break;
        }
    }
    if (valorSelecionado === 'fisica') {
        document.getElementById(div1).classList.remove('d-none');
        document.getElementById(div2).classList.add('d-none');
    } else {
        document.getElementById(div1).classList.add('d-none');
        document.getElementById(div2).classList.remove('d-none');
    }
}


// Máscaras para FONE, CPF e CNPJ - MULTIPLOS E REPETIDOS INPUTS
// a função FUNCIONA, mas o console retorna inputmask como undefined
function aplicarMascaras() {
    let inputs = ['','_edit'];
    for (let i = 0; i < inputs.length; i++) {
        $('#fone'+inputs[i]).inputmask('(99) 9 9999-9999');
        $('#foneFixo'+inputs[i]).inputmask('(99) 9999-9999');
        $('#cpf'+inputs[i]).inputmask('999.999.999-99');
        $('#cnpj'+inputs[i]).inputmask('99.999.999/9999-99');
    }
}

$(document).ready(function() {
    aplicarMascaras();
});
