// Função para atualizar o conteúdo de dentro do modal, Ex: modal de compatibilidade
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

// identifica os THs da tabela e adiciona o evento de click em cada um
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
    // separa por caracteres e põe em caixa baixa
    const query = this.value.trim().toLowerCase(); 
    // resgata todos os dados que estão dentro das tags TR
    const rows = document.querySelectorAll('#table-body tr'); 

    if (query === '') { // se o valor não for digitado exibe todas as linhas
        rows.forEach(row => {
            row.style.display = ''; // a linha será exibida
        });
        return;
    }
    rows.forEach(row => { // percorre todas as linhas
        const cells = Array.from(row.cells);
        const match = cells.some(cell => cell.textContent.toLowerCase().includes(query));
        row.style.display = match ? '' : 'none'; // se for encontrado exibe a linha, caso contrario oculta
    });
});


// API para buscar dados do CNPJ

 // recebe o id do input cnpj e o id do campus q vão ser preenchidos
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
            // passar os dados para a função preencherDadosCNPJ
            .then(data => preencherDadosCNPJ(data, campus))
            .catch(error => alert(error.message));
    } 
    else {
        alert("CNPJ inválido. Deve conter 14 dígitos.");
    }
}

// preencher dados, referente a função buscarDadosCNPJ
function preencherDadosCNPJ(data, campus = []) {
    if(data.descricao_situacao_cadastral.toLowerCase() == 'ativa'){
        document.getElementById(campus[0]).value = data.razao_social || "";
        document.getElementById(campus[1]).value = data.cep || "";
        document.getElementById(campus[2]).value = data.logradouro || "";
        document.getElementById(campus[3]).value = data.numero || "";
        document.getElementById(campus[4]).value = data.bairro || "";
        document.getElementById(campus[5]).value = data.uf || "";
        document.getElementById(campus[6]).value = data.municipio || "";
    }
    else {alert('CNPJ inativo, digite um CNPJ ativo ou Cadastre-se com CPF');}
}


// limpar botões inputs
function clearInputs() {
    const inputs = document.querySelectorAll('input');
    inputs.forEach(input => input.value = "");
}


// função para mostrar e ocultar campos de acordo com o radio button
function ShowORHide(div1, div2, radioInputId) {
    const radios = document.getElementsByName(radioInputId);
    let valorSelecionado;
    for (const radio of radios) {
        if (radio.checked) {
            valorSelecionado = radio.value; break;
        }
    }
    if (valorSelecionado === 'fisica') { // se pessoa fisica for selecionada
        document.getElementById(div1).classList.remove('d-none');
        document.getElementById(div2).classList.add('d-none');
    } else { // caso nao seja pessoa fisica	=> pessoa juridica
        document.getElementById(div1).classList.add('d-none');
        document.getElementById(div2).classList.remove('d-none');
    }
}