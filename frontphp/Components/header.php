<ul class="hul">

                <li class="hli todos grow" onclick="filtrar('todas')">
                    <p>Todas as enquetes</p>
                </li>

                <li class="hli encerrado grow" onclick="filtrar('encerradas')">
                    <p>Encerradas</p>
                </li>

                <li class="hli atual grow" onclick='filtrar("atuais");'>
                <p>Em andamentos</p>
                </li>
                
                <li class="hli futuro grow" onclick="filtrar('futuras')">
                <p>Futuras</p>
                </li>

                <li class="hli searchbar"> 
                    <label for="idSearch">ID </label>
                    <input id="idSearch" type="number" class="search">
                    <img src="./Public/search.svg" class="circulo3"alt="Pesquisar!" onclick="search()">
                </li>
</ul>