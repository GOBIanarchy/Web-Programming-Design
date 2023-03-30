
function createTable(){
  // Table created or not (checker)
  if(document.getElementById("myTable") == null){
    
    // Creating table 
    var mainTable = document.createElement("table");
    var tableHeader = document.createElement("thead");
    var tableRow = document.createElement("tr");
    var idBox = document.createElement("th");
    var headerID = document.createTextNode("ID");
    var nameBox = document.createElement("th");
    var headerName = document.createTextNode("Name");
    var priceBox = document.createElement("th");
    var priceName = document.createTextNode("Price$");
    

    var tableBody = document.createElement("tbody");
    
    mainTable.appendChild(tableHeader);
    mainTable.appendChild(tableBody);
    tableHeader.appendChild(tableRow);
    
    tableRow.appendChild(idBox); 
    tableRow.appendChild(nameBox);
    tableRow.appendChild(priceBox);
    
    nameBox.appendChild(headerName);
    idBox.appendChild(headerID);
    priceBox.appendChild(priceName);

    var element = document.getElementById("divTable");
    element.appendChild(mainTable);
    element.setAttribute("id", "myTable");
    tableBody.setAttribute("id", "tableBody");
    document.getElementById('add_Button').disabled = false;
    document.getElementById('delete_Button').disabled = false;
    var textbox = document.createElement("input");
    textbox.id = "inputBox";
    textbox.name = "inputBox";

    document.body.appendChild(textbox);
  
  }else{
    alert("Table already created");
  }

  }

  let invisibleId = 0;
  let idArray = [];

  function addRow() {
  
    // Element ID 
    var newRow = document.createElement("tr");
    var newData1 = document.createElement("td");
    var newData2 = document.createElement("td");
    var newData3 = document.createElement("td");
    var tableBody = document.getElementById("tableBody");
    newRow.setAttribute("id", invisibleId);
    idArray.push(invisibleId);
    // Data1
    
    newData1.innerHTML = invisibleId;
  
    invisibleId += 1;
    
    // Data2
    
    var name = ["Hat", "Coat", "Jacket", "Jeans", " Trousers", "Sneakers", "Boots"];
    var randomName = Math.floor(Math.random() * name.length);
    var itemName = name[randomName];
    newData2.innerHTML=itemName;

    // Data3 
    switch(itemName){
      case "Hat":
        newData3.innerHTML = Math.floor(getPrice(10, 100))+".99"+"$";
        break;
      case "Coat":
        newData3.innerHTML = Math.floor(getPrice(10, 100))+".53"+"$";
        break;
      case "Jacket":
        newData3.innerHTML = Math.floor(getPrice(10, 100))+".75"+"$";
        break;
      case "Jeans":
        newData3.innerHTML = Math.floor(getPrice(10, 100))+".25"+"$";
        break;
      case "Trousers":
        newData3.innerHTML = Math.floor(getPrice(10, 100))+".55"+"$";
        break;
      case "Sneakers":
        newData3.innerHTML = Math.floor(getPrice(10, 100))+".35"+"$";
        break;
      case "Boots":
        newData3.innerHTML = Math.floor(getPrice(10, 100))+".75"+"$";
        break;
      default:
        newData3.innerHTML = Math.floor(getPrice(10, 100))+".99"+"$";
        break;
    }

    tableBody.appendChild(newRow);
    newRow.appendChild(newData1);
    newRow.appendChild(newData2);
    newRow.appendChild(newData3);


}

function getPrice(min, max) {
  return Math.random() * (max - min) + min;
}

function checkInt(n){
  return Number(n)==n && n%1==0;
}
let deletedItems = [];
function deleteRow(){
  var result = document.getElementById("inputBox").value;
  deletedItems.push(result);
  console.log(checkInt(result));
  if(idArray.includes(parseInt(result)) && checkInt(result)){
    let deleteRow = document.getElementById(result);
    deleteRow.remove();
    idArray = idArray.filter(item => item != result);
  }else{
    alert("Check ID number");
  }
} 