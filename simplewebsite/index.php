<?php 
include_once("./header.php");
?>
<html lang="en">

<body style="margin: 0; padding: 0; font-family: Arial, sans-serif;">

    <!-- Background Image Section -->
    <div style="background-image: url('https://images.unsplash.com/photo-1531306728370-e2ebd9d7bb99?w=700&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8dW5pdmVyc2VyfGVufDB8fDB8fHww'); background-size: cover; height: 100vh; display: flex; justify-content: center; align-items: center; text-align: center;">
        <div style="background-color: rgba(255, 255, 255, 0.9); padding: 20px; border-radius: 10px;">
            <h1 style="color: #333; font-size: 48px;">Welcome to Our Beautiful Homepage</h1>
            <p style="color: #555; font-size: 20px;">Explore our amazing content and services.</p>
            <button style="background-color: #007bff; color: #fff; border: none; padding: 10px 20px; border-radius: 5px; cursor: pointer;">Get Started</button>
        </div>
    </div>

    <!-- Content Section -->
    <div style="padding: 50px;">
        <h2 style="color: #333; text-align: center;">Our Services</h2>
        <div style="display: flex; justify-content: space-around; margin-top: 30px;">
            <div style="flex: 1; text-align: center;">
                <img src="https://images.unsplash.com/photo-1531306728370-e2ebd9d7bb99?w=700&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8dW5pdmVyc2VyfGVufDB8fDB8fHww" alt="Service 1"  style="height:100px; width:100px; border-radius: 50%; border: 5px solid #007bff;">
                <h3 style="color: #333; margin-top: 10px;">Service 1</h3>
                <p style="color: #555;">Description of Service 1</p>
            </div>
            <div style="flex: 1; text-align: center;">
                <img src="https://images.unsplash.com/photo-1531306728370-e2ebd9d7bb99?w=700&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8dW5pdmVyc2VyfGVufDB8fDB8fHww" alt="Service 2"  style="height:100px; width:100px; border-radius: 50%; border: 5px solid #007bff;">
                <h3 style="color: #333; margin-top: 10px;">Service 2</h3>
                <p style="color: #555;">Description of Service 2</p>
            </div>
            <div style="flex: 1; text-align: center;">
                <img src="https://images.unsplash.com/photo-1531306728370-e2ebd9d7bb99?w=700&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8dW5pdmVyc2VyfGVufDB8fDB8fHww" alt="Service 3"   style="height:100px; width:100px; border-radius: 50%; border: 5px solid #007bff;">
                <h3 style="color: #333; margin-top: 10px;">Service 3</h3>
                <p style="color: #555;">Description of Service 3</p>
            </div>
        </div>
    </div>

</body>
<?php 
include_once("./footer.php");
?>
</html>
