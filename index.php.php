<?php
// Read the variables sent via POST from our API
$sessionId   = $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"];
$phoneNumber = $_POST["phoneNumber"];
$text        = $_POST["text"];

if ($text == "") {
    // This is the first request. Note how we start the response with CON
    $response  = "CON Karibu to AiFarm unity USSD service , where we offer Food security and Value addition tips for different Farm Products, Animal products and Fertilisers 
     Please which Language do you prefer to use ?\n";
    $response .= "1. English and Kiswahili \n";
   

} else if ($text == "1") {
    // Business logic for first level response
    $response = "CON Je, Ni bidhaa zipi ungependa Kuongeza dhamani \n";
    $response .= "1. Farm Products \n";
    $response .= "2. Animal Products \n";
    $response .= "3. Fertilisers au Mbolea Ya Kutumia \n";

} else if ($text == "1*1") {
    // Business logic for first level response
    // This is a terminal request. Note how we start the response with END
    $response = " CON In this section we offer Value addition tips for the following Farm Products,Please select from the category you are interested in \n";
    $response .= "1. VEGETABLES and Kales \n";
    $response .= "2.  BANANAS  \n";
    $response .= "3.  Carrots and onions \n";
    $response .= "4. Potatoes \n";

}  else if($text == "1*1*1") { 
    // This is a second level response where the user selected 1 in the first instance
     $response .= "CON in this section we will talk about more of Veges products \n";
     $response .= "END The Vegetables can be repackaged as Kale chips, as they produce essential nutrients like vitamin A ,B and C , mineral like calcium \n";
}
  else if($text == "1*1*2") { 
    // This is a second level response where the user selected 1 in the first instance
     $response .= "CON in this section we will talk about more of Bananas products \n";
     $response .= "END Flour can be produced from Bananas to different degree of fitness.Its cheaper to produce due to availability of the fruit. Its produced from the green pulp and its ground to produce flour \n";
}
else if($text == "1*1*3") { 
    // This is a second level response where the user selected 1 in the first instance
     $response .= "CON in this section we will talk about more of Carrots and Onions products \n";
     $response .= "END Example of Value added onion products are Frozen onion rings , Onion Paste , dehydrated onion flakes ,Onion Powder , vinegar , Salts , sauces 
     and  carrots you can make Carrot cake ,salad and canned stew \n";
}
else if($text == "1*1*4") { 
    // This is a second level response where the user selected 1 in the first instance
     $response .= "CON in this section we will talk about more of Potatoes or Viazi \n";
     $response .= "END You can make the Following Products from Potatoes , Mashed Potatoes, Roasted Potatoes, Baked Potatoes ,Potato salad and also sweet potatoes can be processed into flour to increase its economic value and used in variety of food such as cakes \n";
}
else if($text == "1*2") { 
    // This is a second level response where the user selected 1 in the first instance
     $response .= "CON in this section We offer value addition in animal Products and Please select from the List below \n";
     $response .= "1. Meats from Cows and Goats \n";
     $response .= "2. Milk Products \n";
     $response .= "3. Fish or Samaki \n";
}
else if($text == "1*2*1") { 
    // This is a second level response where the user selected 1 in the first instance
     $response .= "CON in this section we will talk about more of Meat Products \n";
     $response .= "END You can get Minced Meat ,sausages and Many more Products \n";
}
else if($text == "1*2*2") { 
        // This is a second level response where the user selected 1 in the first instance
     $response .= "CON in this section we will talk about more of Milk Products \n";
     $response .= "END You can make cheese ,butter, Yoghurt and other products\n";
}
else if($text == "1*2*3") { 
    // This is a second level response where the user selected 1 in the first instance
    $response .= "CON in this section we will talk about more of Fish Products \n";
    $response .= "END Rearing Fish in Pond can be so benefitial, since they provide essential nutrients such as proteins and they can be used in decoration and acquarium \n";
}
else if($text == "1*3") { 
    // This is a second level response where the user selected 1 in the first instance
    $response .= "CON Katika sekta hii ya mbolea , tutaangalia aina ya Mbolea na umuhimu wa Madini Kwa Mazao ya Mkulima \n";
    $response .= "1. Organic Fertlisers \n";
    $response .= "2. Complex Fertlisers \n";
    $response .= "3. Inorganic Fertlisers \n";
    $response .= "4. Phosphorous Fertlisers \n";
    $response .= "5. Nitrogen Fertlisers \n";
}
else if($text == "1*3*1") { 
    // This is a second level response where the user selected 1 in the first instance
    $response .= "CON in this section we will talk about more of Organic Fertilisers \n";
    $response .= "END They are materials that are derived from plants and Animals , Example Manure, They increase soil health, support Carbon olives capture and plant growth , they are used by cereals ,Potataoes \n";
} 
else if($text == "1*3*2") { 
    // This is a second level response where the user selected 1 in the first instance
    $response .= "CON in this section we will talk about more of Complex  Fertilisers \n";
    $response .= "END Combination of Nitrogenous fertelisers , Phosphorous fertilisers , Potassium fertilisers which increases fertility and is good by spring cereals \n";
}   
else if($text == "1*3*3") { 
    // This is a second level response where the user selected 1 in the first instance
    $response .= "CON in this section we will talk about more of Inorganic  Fertilisers \n";
    $response .= "END  they are made from mined or synthesised nonliving materials and are good to corns and wheat \n";
}
else if($text == "1*3*4") { 
    // This is a second level response where the user selected 1 in the first instance
    $response .= "CON in this section we will talk about more of Phosphorous  Fertilisers \n";
    $response .= "END  they contain phosphorous which is essential to crops, which help produce root tubers and good to corn , tomatoes, pepper and roses \n";
}
else if($text == "1*3*5") { 
    // This is a second level response where the user selected 1 in the first instance
    $response .= "CON in this section we will talk about more of Nitrogen  Fertilisers \n";
    $response .= "END  They help in producing green leaves and stems , which is necessary to Agriculture growth. It comprises of Calcium Ammonium Sulphate and Nitrogen which is essential for plants such as Cucumbers , Tomatoes ,roots plants, tubers such as Carrots and leguminous plants such as beans , clovers and nuts \n";
}
// Echo the response back to the API
header('Content-type: text/plain');
echo $response;