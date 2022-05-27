var BookContainer = JSON.parse(localStorage.getItem("bookdata")) ;
dispaly();

var BookPhoto;
function pho(event) {
            var reader = new FileReader();
//            var name = event.target.files[0].name;
    
            reader.addEventListener("load", function () {
                if (this.result && localStorage ) {
//                    window.localStorage.setItem(name, this.result);
                    BookPhoto = this.result;
//                    console.log(this.result);
                    console.log( window.localStorage.getItem('image'))
                }
            });
            reader.readAsDataURL(event.target.files[0]);
            } 
                                    
                                    
function store() {
    if (BookContainer == null){BookContainer =[]}
    var BookName    = document.getElementById('BookName').value;
    var BookAutor   = document.getElementById('BookAutor').value;
    var BookSalary  = document.getElementById('BookSalary').value;
    var BookDesc    = document.getElementById('BookDesc').value;
//    var BookPhoto    = document.getElementById('BookPhoto').value;;

    var Book ={
        BookName,
        BookAutor,
        BookSalary,
        BookDesc ,
        BookPhoto 
//        : "img/download2.jfif"
    }
    
    BookContainer.push(Book);
    dispaly();
    rest();
    console.log(BookContainer)
}
function rest(){
    document.getElementById('BookName').value   ='';
    document.getElementById('BookAutor').value  ='';
    document.getElementById('BookSalary').value ='';
    document.getElementById('BookDesc').value   ='';
    document.getElementById('BookPhoto').value  ='';
}
function dispaly(){
     BookPhoto = window.localStorage.getItem('image')
    var temp =""; 
    for (var i=0; i < BookContainer.length; i++ ){
           temp += `<div class="col-md-3 col-sm-12 d-flex justify-content-around" >
            <div class="card" style="width: 18rem;">
        <img src="` + BookContainer[i].BookPhoto + `" class="card-img-top" Width="200px" Height="200px" alt="...">
         <span class="badge badge-info position-absolute rounded fa-1x">` + BookContainer[i].BookSalary + ` L.E</span>
        <button class="btn btn-info position-absolute rounded" style="right:0px;"
            onclick='del(`+i+`)'>x</button>
        <button class="btn btn-info position-absolute rounded" style="right:40px;"
            onclick='edit(`+i+`)'>...</button>
        <div class="card-body">
        <h5 class="card-title">Name :`+BookContainer[i].BookName+`</h5>
        <small class="card-title">Autor :`+BookContainer[i].BookAutor+`</small>
        <p class="card-text">Description : `+BookContainer[i].BookDesc+`</p> 
        </div>
        </div></div>  `
//    document.getElementById('temp').innerHTML += temp;
    }
    document.getElementById('temp').innerHTML = temp;
 localStorage.setItem("bookdata", JSON.stringify(BookContainer));
}
function del(i){
//    console.log(BookContainer[i]);
if(  confirm("do U want to Delete this Book"))  {
    BookContainer.splice(i,1);
    localStorage.setItem("bookdata", JSON.stringify(BookContainer));
    dispaly();
}
}
function Search(word){
   word =word.toLowerCase();
    var temp =""; 
    for (var i=0; i < BookContainer.length; i++ ){
    if ( ( BookContainer[i].BookName).startsWith(word) ){
           temp += `<div class="col-md-3 col-sm-12 d-flex justify-content-around" >
            <div class="card" style="width: 18rem;">
        <img src="`+BookContainer[i].BookPhoto + ` " class="card-img-top" 
        Width="100%" Height="200px" alt="...">
         <span 
            class="badge badge-info position-absolute fa-1x">`
            + BookContainer[i].BookSalary +` L.E</span>
        <button class="btn btn-info position-absolute" style="right:0px;"
            onclick='del(`+i+`)'>x</button>
        <button class="btn btn-info position-absolute rounded" style="right:40px;"
            onclick='edit(`+i+`)'>...</button>
        <div class="card-body">
        <h5 class="card-title">` + BookContainer[i].BookName+`</h5>
        <small class="card-title">` + BookContainer[i].BookAutor+`</small>
        <p class="card-text">` + BookContainer[i].BookDesc+`</p> 
        </div>
        </div></div> `;
    }
    else{dispaly();}
    }
        document.getElementById('temp').innerHTML = temp;
}
function edit(i){
    temp = `<div class="col-md-3 col-sm-12 d-flex justify-content-around" >
            <div class="card" style="width: 18rem;">
        <img src="` + BookContainer[i].BookPhoto + `" class="card-img-top" Width="200px" Height="200px" alt="...">
        <input id="eSalary" class="w-25 position-absolute rounded fa-1x" value="` +  BookContainer[i].BookSalary + `">
            <span class="badge badge-info position-absolute p-2 fa-1x" style="left:65px;"  > L.E</span>
        <button class="btn btn-info position-absolute rounded" style="right:0px;"
            onclick='dispaly()'><</button>
        <button class="btn btn-info position-absolute rounded" style="right:40px;"
            onclick='save(`+i+`)'>save</button>
        <div class="card-body">
        BookName :<input id="eName" class="card-title" value="`+BookContainer[i].BookName +`">
        Autor :<input id="eAutor" class="card-title" value="`+BookContainer[i].BookAutor+`">
        Description :<input id="eDesc" class="card-text"  value="`+BookContainer[i].BookDesc+`">
        </div>
        </div></div>  `
     document.getElementById('temp').innerHTML = temp;   
}
    function save(i){
        BookContainer[i].BookSalary=document.getElementById('eSalary').value;
        BookContainer[i].BookName=document.getElementById('eName').value;
        BookContainer[i].BookAutor=document.getElementById('eAutor').value;
        BookContainer[i].BookDesc=document.getElementById('eDesc').value;
        
        localStorage.setItem("bookdata", JSON.stringify(BookContainer));
        dispaly();
        
    }