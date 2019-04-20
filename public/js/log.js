function addRow()
{
    // get input values
    var medname = document.getElementById('medname').value;
     var dose = document.getElementById('dose').value;
      var route = document.getElementById('route').value;
      var duration = document.getElementById('duration').value;
      
      // get the html table
      // 0 = the first table
      var table = document.getElementsByTagName('table')[0];
      
      // add new empty row to the table
      // 0 = in the top 
      // table.rows.length = the end
      // table.rows.length/2+1 = the center
      var newRow = table.insertRow(table.rows.length);
      
      // add cells to the row
      var cel1 = newRow.insertCell(0);
      var cel2 = newRow.insertCell(1);
      var cel3 = newRow.insertCell(2);
      var cel4 = newRow.insertCell(3);
      
      // add values to the cells
      cel1.innerHTML = medname;
      cel2.innerHTML = dose;
      cel3.innerHTML = route;
      cel4.innerHTML = duration;
}