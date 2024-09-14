const button_add = document.querySelector("#add");

button_add.addEventListener("click", () => {
    const main_list = document.querySelector("#main-list");
    const task_input = document.querySelector("#input"); 

    const task_name = task_input.value; 
 
    var new_li = document.createElement("li");
    new_li.innerHTML = `${task_name} <button type='button' class='btn btn-danger btn-delete'>Hapus</button>`;
    new_li.classList.add("list-group-item");

    main_list.appendChild(new_li);
    task_input.value = "";

   // delete for new list
    const button_delete = new_li.querySelector(".btn-delete");
    button_delete.addEventListener("click", () => {
      new_li.remove(); 
    }); 
});

// delete for the existing list
const buttons_delete = document.querySelectorAll(".btn-delete");
buttons_delete.forEach(function(button_delete){
  button_delete.addEventListener("click", () => {
    const delete_li = button_delete.parentElement;
    delete_li.remove();
  });
});

