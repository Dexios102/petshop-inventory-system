const searchInput = document.getElementById('table-search-users');
const dataTable = document.getElementById('table');

searchInput.addEventListener('input', () => {
  const searchValue = searchInput.value.toLowerCase();
  const rows = dataTable.getElementsByTagName('tr');

  for (let i = 1; i < rows.length; i++) { // Start from index 1 to exclude the table header
    const row = rows[i];
    const product = row.getElementsByTagName('td')[1].innerText.toLowerCase();
    const description = row.getElementsByTagName('td')[2].innerText.toLowerCase();
    const price = row.getElementsByTagName('td')[4].innerText.toLowerCase();

    if (product.includes(searchValue) || description.includes(searchValue) || price.includes(searchValue)) {
      row.style.display = '';
    } else {
      row.style.display = 'none';
    }
  }
});