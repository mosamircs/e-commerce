# E-Commerce
## Database Structure:
    1- categories => [“t-shirts”,”chemise”,”mobile phones”....etc]
    2- boxes => [“colors”,”sizes”,””]
    3- options => [“red”,”green”,”blue”][”small”,”large”,”x-large”]
    5- variations [combinations] =>[“tshirt red large”]
    6- orders
    7-users
## Scenario:
    - You work to make an e-commerce platform for selling products
    - User can make many orders on many products
## Products :
        =>Have many categories
           => [“t-shirts”,”chemise”,”mobile”]
        =>categories have many boxes
            =>[“colors”,”sizes”]
        =>boxes have many options
            =>[“red”,”green”,”blue”]
            =>[“large”,”x-large”,”meduim”,”small”]
## Categories:
    =>Have many boxes
    => [“colors”,”sizes”,””]
## Boxes:
    =>Have many options
## Options
    => [“red”,”green”,”blue”]
       [”small”,”large”,”x-large”]
## Variations [Combinations] :
    =>There are many combinations in products
    => [
        “red-small t-shirt”,
        ”black large chemise”]
## User [client- customer]:
    =>can make order of many products
## Orders:
