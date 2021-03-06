function createEditField(rownum, pID, pName, pDescript, instock)
{
	var row = document.getElementById(rownum);
	var name = row.childNodes[1].childNodes[0];
	var descript = row.childNodes[2].childNodes[0];
	var inStock = row.childNodes[3].childNodes[0];
	var editButton = row.childNodes[4].childNodes[3];
	
	var nameInput = document.createElement("input");
		nameInput.type = "text";
		nameInput.name = "productName";
		nameInput.value = pName;
	var descriptInput = document.createElement("textarea");
		descriptInput.name = "productDescript";
		descriptInput.innerHTML = pDescript;
	var inStockInput = document.createElement("input");
		inStockInput.type = "text";
		inStockInput.name = "inStock";
		inStockInput.value = instock;
		
	var editSubmit = document.createElement("input");
		editSubmit.name = "EDIT";
		editSubmit.type = "submit";
		editSubmit.value = "edit";
		
	row.childNodes[1].replaceChild(nameInput, name);
	row.childNodes[2].replaceChild(descriptInput, descript);
	row.childNodes[3].replaceChild(inStockInput, inStock);
	row.childNodes[4].replaceChild(editSubmit, editButton);
}

function createAddField()
{
	var list = document.getElementById("content");
	var form = document.createElement("form");
		form.action = "../controllers/manageProducts.php";
			form.method = "POST";
	var listitem = document.createElement("li");
	
	var nameInput = document.createElement("input");
		nameInput.type = "text";
		nameInput.name = "productName";
		
	var descriptInput = document.createElement("textarea");
		descriptInput.name = "productDescript";
		
	var inStockInput = document.createElement("input");
		inStockInput.type = "text";
		inStockInput.name = "inStock";
		
		
	var addSubmit = document.createElement("input");
		addSubmit.name = "ADD";
		addSubmit.type = "submit";
		addSubmit.value = "Submit";
	
		form.appendChild(nameInput);
		form.appendChild(descriptInput);
		form.appendChild(inStockInput);
		form.appendChild(addSubmit);
		listitem.appendChild(form);
		list.appendChild(listitem);
}