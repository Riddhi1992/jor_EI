// https://api.countapi.xyz/

// To create namespace key and value
// https://api.countapi.xyz/create?namespace=drhologram&key=jorie&value=0 

// <!-- This is to get the value -->
// <!-- https://api.countapi.xyz/get/drhologram/jorie --> 

// <!-- This is to update the value by increment of 1 -->
// <!-- https://api.countapi.xyz/update/drhologram/jorie/?amount=1 -->

<script>
    function updateCounter() {
        fetch('https://api.countapi.xyz/update/drhologram/jorie/?amount=1')
        .then(res => res.json())
        .then(data => alert(data.value))
    }
    updateCounter()
</script>
