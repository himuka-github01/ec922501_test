select oi.*,o.*
 from dtb_order_item oi
 left join dtb_order o left join dtb_shipping s on o.id=s.order_id on oi.order_id = o.id
 where s.delivery_date = '2021-10-01'
   and o.tenpo_id = 7
   and oi.bumon_id = 41
   and o.order_status_id not in (3,8)
 order by oi.bumon_id,oi.product_code