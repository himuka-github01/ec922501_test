DROP VIEW IF EXISTS hdn_tenpo_view;
CREATE VIEW hdn_tenpo_view AS (
SELECT
dcc.id as id
,dcc.backend_name AS tenpo_cd
,dcc.name AS tenpo_name
,dcc.sort_no
,dcc.visible
,'hdntenpo' as dtype
FROM dtb_class_category dcc
LEFT JOIN dtb_class_name dcn ON dcc.class_name_id=dcn.id
WHERE dcn.backend_name='TENPO'
)