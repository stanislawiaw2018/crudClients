function confirmExcluir(id){
    swal({
        title: "Deseja realmente remover esse Cliente?",
        icon: "warning",
        //className: "botao-exclusao",
        buttons:{
            Sim:{
                value:"sim",
            },
            Nao:{
                value:"nao",
                color:"red",
            },
        },
      })
      .then((value) => {
        switch(value){
            case "sim":
                window.location.href = '/crud/ACTIONS/delete.php?id='+id;
                break;
            case "nao":
                
                   
        }
      });
}