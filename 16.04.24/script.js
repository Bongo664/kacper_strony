const costs = {
    peeling: 45,
    maska: 30,
    masazTwarzy: 20,
    makijaz: 50
  };
  
  document.querySelector('input[type="button"]').addEventListener('click', () => {
    let totalCost = 0;

    document.querySelectorAll('input[type="checkbox"]').forEach(checkbox => {

      if (checkbox.checked) {
        totalCost += costs[checkbox.id];
      }
    });
  

    document.querySelector('p').textContent = `cena zabiegów: ${totalCost}`;
  });