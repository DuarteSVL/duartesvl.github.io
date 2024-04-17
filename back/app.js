function toggleTable(tableId) {
    // Hide all tables
    document.querySelectorAll('.table').forEach(table => {
      table.style.display = 'none';
    });
  
    // Show the table corresponding to the clicked button
    document.getElementById(tableId).style.display = 'block';
  }