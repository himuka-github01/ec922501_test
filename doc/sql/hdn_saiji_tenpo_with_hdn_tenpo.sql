/*
SELECT st.*,tenpo.* from dtb_hdn_saiji_tenpo st
left join dtb_hdn_tenpo tenpo on st.tenpo_id=tenpo.id
where st.saiji_id = 9
*/
select tenpo.* from dtb_hdn_tenpo tenpo
left join dtb_hdn_saiji_tenpo st
 on tenpo.id=st.tenpo_id
where st.saiji_id=9