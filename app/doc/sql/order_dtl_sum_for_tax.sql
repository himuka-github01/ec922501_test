/*
SELECT * FROM dtb_order
WHERE saiji_id =13 and order_status_id not in (8)
order by create_date
*/
/*
select 
 bumon_id
 ,base_price,price,quantity
 ,(price*quantity) as price_sum,tax_rate,tax
 from dtb_order_item
where order_id
 in (select id from dtb_order where saiji_id = 13 and order_status_id not in (8))
order by bumon_id,order_id,id
*/
select o.subtotal,o.tax,o.total,o.payment_total,o.payment_method
,sum(oi.price*oi.quantity) total_nuki,oi.tax_rate
from dtb_order_item oi left join dtb_order o on oi.order_id=o.id
where o.saiji_id=13
group by o.id,o.subtotal,o.tax,o.total,o.payment_total,o.payment_method,oi.tax_rate
