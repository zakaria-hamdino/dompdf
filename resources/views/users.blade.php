<div class="container-abonnement">
    <p id="title"> Welcome to Medias24  here you can choose your subscription : </p>
    <div class="user-infos-abonnement">
        <form action="users" method="POST">
        @csrf
            <input type="text"  placeholder="adresse de facturation" name="adresse_de_facturation">
            <input type="text"  placeholder="Société" name="société">
            <input type="text"  placeholder="adresse/ligne1" name="adresse_ligne1">
            <input type="text"  placeholder="adresse/ligne2" name="adresse_ligne2">
            <input type="text"  placeholder="ICE" name="ice">
            <input type="text"  placeholder="Ville" name="ville">
            <input type="number" onkeyup="sumPrice(this.value)" placeholder="Choose number readers" name="number_readers">
            <input type="number" id="price"  placeholder="price" readonly>
            <input type="number" id="discount"  placeholder="discount" readonly>
            <input id="difference" type="text" placeholder="difference" readonly>
            <input id="final_result" type="text" placeholder="reuslts" readonly name="total">
            <button type="submit">Send</button>
        </form>
    </div>
</div>
<style>
    #title{
        text-transform: uppercase;
        font-size: $extra-large;
        font-family: 'Catamaran', sans-serif;
    }
    .container-abonnement{
        display: flex;
        flex-direction: column;
        width: 50%;
        align-items: center;
        height: 420px;
    }
    .user-infos-abonnement{
        display: flex;
        flex-direction: column;
        justify-content: space-between;
        height:340px;
        width: 230px;
        align-items:center;
    }
    #discount{
        width:85px;   
    }
</style>
<script>
    function sumPrice(value){
    let price = 150;
    let total_price = (value * price) - 1;
    document.getElementById('price').value = (total_price > -1) ? total_price : 0;

    promotion=0
    // document.getElementById("first").value = value;
    result = 0
    if (value >= 21 && value <= 60){
         promotion = 5
    }else if (value >= 61 && value <= 100){
         promotion= 10
    }else if (value > 100){
        promotion = 15 
    }
    document.getElementById("discount").value= promotion;
    result = total_price - (total_price*promotion/100)
    document.getElementById("final_result").value= result> -1 ? result :0,
    document.getElementById("difference").value=(total_price*promotion/100)
}

</script>
