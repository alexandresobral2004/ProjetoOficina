// Função para atualizar o conteúdo de dentro do modal
function ModalRefresh(conteudo, modalId) {
    document.getElementById(modalId).innerText = conteudo;
}

// Função para confirmar a exclusão
function confirmDelete(id) {
    // Configura a rota
    const form = document.getElementById("deleteForm");
    form.action = `/warehouse/${id}`;

    // Abre o modal
    const deleteModal = new bootstrap.Modal(
        document.getElementById("deleteModal")
    );
    deleteModal.show();
}

// calcula o preco final em relação ao preço de produção e margem de lucro
function calcularPrecoFinal() {
    let precoCusto =
        parseFloat(document.getElementById("preco_custo").value) || 0;
    let margemLucro = parseFloat(document.getElementById("margem").value) || 0;
    if (isNaN(precoCusto)) precoCusto = 0;
    if (isNaN(margemLucro)) margemLucro = 0;
    let precoFinal = precoCusto + (precoCusto * margemLucro) / 100;
    document.getElementById("preco_final").value = precoFinal.toFixed(2);
}

// limpa os campos de cadastro
function ClearInputs() {
    document.getElementsByTagName("texarea", "input").value = "";
}

// identifica o titulo da coluna e adiciona o evento de click
document.querySelectorAll("th").forEach((th, index) => {
    th.addEventListener("click", () => sortTable(index));
});

// função de ordenação da lista ao clicar no TH
function sortTable(columnIndex) {
    const table = document.querySelector("table");
    const rows = Array.from(table.querySelectorAll("tbody tr"));
    const isAscending = table.dataset.sortOrder === "asc";
    rows.sort((rowA, rowB) => {
        const cellA = rowA.cells[columnIndex].textContent.trim().toLowerCase();
        const cellB = rowB.cells[columnIndex].textContent.trim().toLowerCase();

        if (!isNaN(cellA) && !isNaN(cellB)) {
            return isAscending ? cellA - cellB : cellB - cellA;
        } else {
            return isAscending
                ? cellA.localeCompare(cellB)
                : cellB.localeCompare(cellA);
        }
    });
    rows.forEach((row) => table.querySelector("tbody").appendChild(row));
    table.dataset.sortOrder = isAscending ? "desc" : "asc";

    const headers = table.querySelectorAll("th");
    headers.forEach((header) => {
        header.classList.remove("bg-primary");
        header.style.color = "";
    });

    headers[columnIndex].classList.add("bg-primary");
    headers[columnIndex].style.color = "white";
}

// Funcão de pesquisa, barra de pesquisa da tabela
document.getElementById("search").addEventListener("input", function () {
    const query = this.value.trim().toLowerCase();
    const rows = document.querySelectorAll("#table-body tr");
    if (query === "") {
        rows.forEach((row) => {
            row.style.display = "";
        });
        return;
    }
    rows.forEach((row) => {
        const cells = Array.from(row.cells);
        const match = cells.some((cell) =>
            cell.textContent.toLowerCase().includes(query)
        );
        row.style.display = match ? "" : "none";
    });
});

function searchList(prefix) {
    const query = document
        .getElementById(`search_${prefix}`)
        .value.trim()
        .toLowerCase();
    const rows = document.querySelectorAll(`#table-body-${prefix} tr`);
    if (query === "") {
        rows.forEach((row) => {
            row.style.display = "";
        });
        return;
    }
    rows.forEach((row) => {
        const cells = Array.from(row.cells);
        const match = cells.some((cell) =>
            cell.textContent.toLowerCase().includes(query)
        );
        row.style.display = match ? "" : "none";
    });
}

document.addEventListener("DOMContentLoaded", function () {
    // Função de pesquisa, barra de pesquisa da tabela
    const searchInputs = document.querySelectorAll("[id^='search_']");
    searchInputs.forEach((searchInput) => {
        const prefix = searchInput.id.split("_")[1];
        searchInput.addEventListener("input", function () {
            searchList(prefix);
        });
    });
});

// Função para buscar CEP
function searchCep(prefix) {
    let cep = document.getElementById(`zip_code_${prefix}`).value;
    // Remove caracteres não numéricos do CEP
    cep = cep.replace(/\D/g, "");

    if (cep.length !== 8) {
        alert("CEP inválido. Deve conter 8 dígitos.");
        return;
    }

    let url = "https://brasilapi.com.br/api/cep/v1/" + cep;

    fetch(url)
        .then((response) => {
            if (response.status === 200) {
                return response.json();
            } else if (response.status === 404) {
                throw new Error("CEP não encontrado");
            } else {
                throw new Error("Erro ao fazer a requisição");
            }
        })
        .then((address) => {
            document.getElementById(`street_${prefix}`).value =
                address.street || "";
            document.getElementById(`neighborhood_${prefix}`).value =
                address.neighborhood || "";
            document.getElementById(`city_${prefix}`).value =
                address.city || "";
            document.getElementById(`state_${prefix}`).value =
                address.state || "";
        })
        .catch((error) => {
            alert(error.message);
            document.getElementById(`street_${prefix}`).value = "";
            document.getElementById(`neighborhood_${prefix}`).value = "";
            document.getElementById(`city_${prefix}`).value = "";
            document.getElementById(`state_${prefix}`).value = "";
        });
}
