/*1º Desafio 2*/
SELECT categories.name, COUNT(*) AS qtdProdutos FROM products 
JOIN categories ON products.category_id=categories.id 
GROUP BY categories.name;

/*2º Desafio 2*/
SELECT categories.name AS categoria, AVG(price) AS valorMedio FROM products 
JOIN categories ON products.category_id=categories.id 
GROUP BY categories.name;

/*3º Desafio 2*/
UPDATE products SET category_id = 1 WHERE category_id=2;