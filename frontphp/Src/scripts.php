<script>
            function openpopup (id,op){
                /**createenquete */
                document.cookie ="popup=true";
                document.cookie = `operation=createenquete`;
                document.cookie =`errorprompt=`;

                if(op=="readenquete"){
                    document.cookie = `operation=readenquete`;

                    document.cookie =`idenquete=${id}`;
                }
                document.location.reload();
            }
            function popupclose(){
                document.cookie ="popup=false";
                document.cookie = "operation=close";
                document.cookie =`idenquete=0`;
                document.cookie =`errorprompt=`;

                document.location.reload();
            }




            function insert(item){
                let options = document.getElementsByClassName("optionsinput");
                console.log(options.length)
                let optionsValues = []

                for(option of options){
                    if(option.value==""){
                        document.cookie =`errorprompt=São necessárias ao menos 3 opções para a enquete.`;
                        break;
                    }
                
                        optionsValues.push(option.value);
                    }
                    let titulo= document.getElementById("tituloenquete");
                    if(titulo.value.length<5||isNaN(option.value)){
                    document.cookie =`errorprompt=Não serão aceitos títulos de menos de 5 letras.`;
                    }
                    /**Aqui faz o post */
                    document.cookie="operation=postenquete";
                    document.cookie=`enquetetitle=${titulo.value}`;
                    document.cookie="enquetestart=postenquete";
                    document.cookie="enqueteend=postenquete";
                    document.cookie="enqueteoptions=postenquete";
                    
                    document.location.reload();     
                    }
                
            
</script>