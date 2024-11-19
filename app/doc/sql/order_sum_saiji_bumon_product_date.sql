/*
select
 ord.saiji_id,item.bumon_id,item.product_code
,sum(case delivery_date when '2021-08-10' then item.quantity else 0 end) as day1_num
,sum(case delivery_date when '2021-08-10' then item.quantity*item.base_price else 0 end) as day1_gaku
,sum(case delivery_date when '2021-08-15' then item.quantity else 0 end) as day2_num
,sum(case delivery_date when '2021-08-15' then item.quantity*item.base_price else 0 end) as day2_gaku
,sum(case delivery_date when '2021-08-30' then item.quantity else 0 end) as day3_num
,sum(case delivery_date when '2021-08-30' then item.quantity*item.base_price else 0 end) as day3_gaku
 from dtb_order_item item
 left join dtb_order ord on item.order_id=ord.id
 left join dtb_shipping ship on item.order_id=ship.order_id
 where item.order_id>81
   and item.order_item_type_id=1 
   and item.bumon_id is not null
 group by ord.saiji_id,item.bumon_id,item.product_code
 order by ord.saiji_id,item.bumon_id,item.product_code
*/

select o.saiji_id,o.tenpo_id,oi.bumon_id,oi.product_code,s.delivery_date
,max(oi.product_name) as product_name
,sum(oi.quantity) as suryo
,sum(oi.quantity*oi.base_price) as base_kingaku
,sum(oi.quantity*oi.price) as kingaku
,sum(oi.quantity*oi.wari_a_gaku) as wari_a_kingaku
,sum(oi.quantity*oi.wari_b_gaku) as wari_b_kingaku
,sum(oi.quantity*oi.wari_kikan_gaku) as wari_kikan_kingaku
,sum(oi.quantity*oi.wari_matome_gaku) as wari_matome_kingaku
from dtb_order o
left join dtb_order_item oi
left join dtb_shipping s on oi.shipping_id=s.id
 on o.id=oi.order_id
where o.saiji_id=10
 and oi.product_code is not null
group by o.saiji_id,o.tenpo_id,oi.bumon_id,oi.product_code,s.delivery_date
order by o.saiji_id,o.tenpo_id,oi.bumon_id,oi.product_code,s.delivery_date