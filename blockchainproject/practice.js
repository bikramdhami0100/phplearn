const button=document.getElementById("btn");
const text=document.getElementById("text").value;

    const MyFun=()=>{
        if (navigator.clipboard) {
            navigator.clipboard.readText(text).then((v)=>{
                console.log(v);
             }).catch((e)=>{
                console.log(e);
             })
            navigator.clipboard.writeText(text).then(()=>{
                console.log(text);
            }).catch((err)=>{
              console.log(err);
            });
        }
        
    }
    button.addEventListener("click",MyFun);



