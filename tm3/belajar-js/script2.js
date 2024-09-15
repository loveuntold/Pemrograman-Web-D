/*
DOM (Document Object Model)
Coba gugel Dom Tree JS
Pakai bootstrap
*/
const button_tambah = document.querySelector("#tambah");
button_tambah.addEventListener("click", () => {
  const main_list = document.querySelector("#main-list");
  var new_li = document.createElement("li");
  new_li.innerHTML =
    "Belajar JS <button type='button' class='btn btn-danger'>Hapus</button>";
  new_li.classList.add("list-group-item");
  main_list.appendChild(new_li);
  // console.log(main_list);
  // alert("Aku diklik");
});
const buttons_hapus = document.querySelectorAll(".btn-hapus");
// for (let button_hapus in buttons_hapus) {
//     button_hapus.addEventListener("click",() =>{
//         const delete_li = button_hapus.parentElement;
//         console.log(delete_li);
//         delete_li.remove();
//     })
// }

// Event Bubbling

buttons_hapus.forEach(function(button_hapus){
    button_hapus.addEventListener("click", () => {
        const delete_li = button_hapus.parentElement;
        console.log(delete_li);
        delete_li.remove();
      });
})
for (let button_hapus in buttons_hapus) {

}
