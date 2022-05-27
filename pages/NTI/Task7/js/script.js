var search =document.querySelector("#search i");
let input = document.querySelector("nav:last-of-type form input");
search.addEventListener("click",()=>{
    input.classList.toggle("dis-none");
});
input.addEventListener("keyup", (e)=>{
    if(e.key == "Enter"){
       let pa = document.querySelectorAll("p");
       pa.forEach((ele)=>{
        if(ele.textContent.toLowerCase().includes(input.value.toLowerCase())){
            // ele.style.color ="red"
            ele.innerHTML = ele.innerHTML.replace(input.value,`<mark>${input.value}</mark>` );
        }
       })
    //    console.log(pa);
    }
});