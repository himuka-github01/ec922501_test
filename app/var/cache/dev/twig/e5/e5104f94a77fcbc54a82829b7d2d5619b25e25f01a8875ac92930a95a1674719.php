<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* ProductOption/Resource/locale/messages.ja.yaml */
class __TwigTemplate_68e6620dffc31b3fc9c57d85ac5e24d41ec35a69da66a90dd7561cbe12715d55 extends \Eccube\Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ProductOption/Resource/locale/messages.ja.yaml"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "ProductOption/Resource/locale/messages.ja.yaml"));

        // line 1
        echo "# nav
productoption.admin.nav.product.option: オプション管理
productoption.admin.nav.product.option.category: 選択肢管理
productoption.admin.nav.product.product.option: 商品登録(オプション)
productoption.admin.nav.product.product.rank: オプション並び替え
productoption.admin.nav.content.productoption: 商品オプションデザイン管理
productoption.admin.nav.content.productoption.option: オプション選択部
productoption.admin.nav.content.productoption.description: オプション説明モーダル
productoption.admin.nav.content.productoption.css: オプションCSS

# twig
productoption.common.delivery_free: 送料無料
productoption.admin.common.save: この内容で登録
productoption.admin.common.up: 上へ移動
productoption.admin.common.down: 下へ移動
productoption.admin.common.new: 新規登録
productoption.admin.common.product_name: 商品名
productoption.admin.common.option: オプション
productoption.admin.product.list.option.label.assign: 割当
productoption.admin.product.list.option.label.sort: 並替
productoption.admin.product.product_option__card_title: オプション割当情報
productoption.tooltip.product.product_option: この商品に割り当てられたオプションを確認できます。
productoption.admin.product.product_option__confirm_of_product: この商品のオプション割当を確認
productoption.admin.product.product_option_rank__confirm_of_product: この商品のオプションを並び替える
productoption.admin.product.option.backend_name: オプション管理名
productoption.admin.product.option.name: オプション表示タイトル
productoption.admin.product.option.description: 説明文
productoption.admin.product.option.type: タイプ
productoption.admin.product.option.description_flg: オプション説明
productoption.admin.product.option.require: 必須条件
productoption.admin.product.option.require_num: 必須選択数
productoption.admin.product.option.pricedisp_flg: 価格・送料無料条件の表示
productoption.admin.product.option.is_required: 必須チェック
productoption.admin.product.option.require_min: 必須選択数(下限)
productoption.admin.product.option.require_max: 必須選択数(上限)
productoption.admin.product.option.edit: オプションを編集
productoption.admin.product.option.sortable: オプションの順番はドラッグ＆ドロップでも変更可能です。
productoption.admin.product.option.no_item: オプションがありません。
productoption.admin.product.option.copy: 管理名をコピー
productoption.admin.product.option.input_range: 入力範囲
productoption.admin.product.option.info: オプション情報
productoption.admin.product.option.category.list: オプション一覧
productoption.admin.product.option.category.sortable: 選択肢の順番はドラッグ＆ドロップでも変更可能です。
productoption.admin.product.option.category.no_item: 選択肢がありません。
productoption.admin.product.option.category.name: 選択肢名
productoption.admin.product.option.category.description: 説明文
productoption.admin.product.option.category.image: 画像
productoption.admin.product.option.category.disable_flg: 未選択設定
productoption.admin.product.option.category.disable_disp: 未選択肢
productoption.admin.product.option.category.init_flg: 初期値設定
productoption.admin.product.option.category.init_disp: 初期値
productoption.admin.product.option.category.price: 金額
productoption.admin.product.option.category.delivery_free_flg: 送料無料
productoption.admin.product.option.category.placeholder: 説明文(placeholder)
productoption.admin.product.option.category.multiple: 数量の金額反映
productoption.admin.product.option.category.detail: 詳細設定
productoption.admin.product.option.option.disp: 説明画面
productoption.admin.product.option.option.rank.assign: オプション割り当て
productoption.admin.product.option.option.rank.sort: オプション並び替え
productoption.admin.product.option.modal.header: オプションを削除します。
productoption.admin.product.option.modal.body: オプションは一覧（マスター）から削除されますが、これまでの取引等のデータから消えることはありません。この操作はあとから取り消すことができません。このオプションを削除しますか？
productoption.admin.product.option.category.modal.header: 選択肢を削除します。
productoption.admin.product.option.category.modal.body: 選択肢は一覧（マスター）から削除されますが、これまでの取引等のデータから消えることはありません。この操作はあとから取り消すことができません。この選択肢を削除しますか？
productoption.admin.content.design.reset: 初期値に戻す
productoption.admin.content.option.title: オプション選択部テンプレート編集
productoption.admin.content.description.title: オプション説明モーダルテンプレート編集
productoption.admin.content.css.title: オプションCSS編集
productoption.admin.content.label.option: オプション選択部デザイン
productoption.admin.content.label.description: オプション説明モーダルデザイン
productoption.admin.content.label.css: オプションCSS
productoption.admin.content.design.description.option: 商品一覧・商品詳細ページにオプションが表示されない場合はご希望される位置に下記のタグを挿入されてください。
productoption.admin.content.design.description.description: 商品一覧・商品詳細ページにが説明モーダル表示されない場合はご希望される位置に下記のタグを挿入されてください。
productoption.admin.config.title: プラグイン設定
productoption.admin.config.subtitle: 商品オプション設定
productoption.admin.config.label.range: 送料無料判定
productoption.admin.config.label.range.all: 全商品を対象に判定
productoption.admin.config.label.range.shipping: お届け先ごとに判定

productoption.product.option.description.title: 詳細説明
productoption.product.option.description.price: 価格
productoption.product.option.description.select: 選択する
productoption.product.option.description.add_tax: + 税
productoption.product.option.description.inc_tax: (税込)
productoption.product.option.price_header: オプション価格：¥

productoption.csv.common.label: オプション情報
productoption.csv.product.label.id: オプション割当情報
productoption.csv.product.label.name: オプション割当情報(名称)

productoption.admin.product.product_csv.product_assign_description: オプションIDを(,)区切りで入力
productoption.admin.product.product_csv.not_correct: '%line%行目の%name%が正しく入力されていません。'

# form
productoption.option.type.select: プルダウン
productoption.option.type.radio: ラジオボタン
productoption.option.type.checkbox: チェックボックス
productoption.option.type.text: テキストボックス
productoption.option.type.textarea: テキストエリア
productoption.option.type.date: 日付
productoption.option.type.number: 数値入力
productoption.option.disp.off: 表示しない
productoption.option.disp.on: 表示する
productoption.option.category.delivery_free.off: 設定なし
productoption.option.category.delivery_free.on: 無料設定
productoption.option.category.multiple.off: 反映しない
productoption.option.category.multiple.on: 反映する

# flash message
admin.product.option.up.complete: オプションを上へ移動しました。
admin.product.option.up.error: オプションを上へ移動できませんでした。
admin.product.option.down.complete: オプションを下へ移動しました。
admin.product.option.down.error: オプションを下へ移動できませんでした。
admin.product.option.save.complete: オプションを保存しました。
admin.product.option.save.error: オプションを保存できませんでした。
admin.product.option.delete.complete: オプションを削除しました。
admin.product.option.delete.error: オプションを削除できませんでした。
admin.product.option_category.up.complete: 選択肢を上へ移動しました。
admin.product.option_category.up.error: 選択肢を上へ移動できませんでした。
admin.product.option_category.down.complete: 選択肢を下へ移動しました。
admin.product.option_category.down.error: 選択肢を下へ移動できませんでした。
admin.product.option_category.save.complete: 選択肢を保存しました。
admin.product.option_category.save.error: 選択肢を保存できませんでした。
admin.product.option_category.delete.complete: 選択肢を削除しました。
admin.product.option_category.delete.error: 選択肢を削除できませんでした。
admin.product.option_text_category.save.complete: 詳細を保存しました。
admin.product.option_text_category.save.error: 詳細を保存できませんでした。
admin.product.product_option.complete: オプションを登録しました。
admin.setting.productoption.save.complete: 設定を登録しました。
admin.content.productoption.save.complete: 登録が完了しました。

# validation
productoption.type.range.invalid: 指定範囲を正しく設定してください。
productoption.type.minus.invalid: 0以上を指定してください。
productoption.type.image.path.error: 画像のパスが不正です。
productoption.option.cart.error.check: チェックされていません。
productoption.option.cart.error.min: '%num%つ選択してください。'
productoption.option.cart.error.max: '%num%つ以上選択してください。'
productoption.option.cart.error.limit: '選択できるのは%num%つまでです。'";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "ProductOption/Resource/locale/messages.ja.yaml";
    }

    public function getDebugInfo()
    {
        return array (  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("# nav
productoption.admin.nav.product.option: オプション管理
productoption.admin.nav.product.option.category: 選択肢管理
productoption.admin.nav.product.product.option: 商品登録(オプション)
productoption.admin.nav.product.product.rank: オプション並び替え
productoption.admin.nav.content.productoption: 商品オプションデザイン管理
productoption.admin.nav.content.productoption.option: オプション選択部
productoption.admin.nav.content.productoption.description: オプション説明モーダル
productoption.admin.nav.content.productoption.css: オプションCSS

# twig
productoption.common.delivery_free: 送料無料
productoption.admin.common.save: この内容で登録
productoption.admin.common.up: 上へ移動
productoption.admin.common.down: 下へ移動
productoption.admin.common.new: 新規登録
productoption.admin.common.product_name: 商品名
productoption.admin.common.option: オプション
productoption.admin.product.list.option.label.assign: 割当
productoption.admin.product.list.option.label.sort: 並替
productoption.admin.product.product_option__card_title: オプション割当情報
productoption.tooltip.product.product_option: この商品に割り当てられたオプションを確認できます。
productoption.admin.product.product_option__confirm_of_product: この商品のオプション割当を確認
productoption.admin.product.product_option_rank__confirm_of_product: この商品のオプションを並び替える
productoption.admin.product.option.backend_name: オプション管理名
productoption.admin.product.option.name: オプション表示タイトル
productoption.admin.product.option.description: 説明文
productoption.admin.product.option.type: タイプ
productoption.admin.product.option.description_flg: オプション説明
productoption.admin.product.option.require: 必須条件
productoption.admin.product.option.require_num: 必須選択数
productoption.admin.product.option.pricedisp_flg: 価格・送料無料条件の表示
productoption.admin.product.option.is_required: 必須チェック
productoption.admin.product.option.require_min: 必須選択数(下限)
productoption.admin.product.option.require_max: 必須選択数(上限)
productoption.admin.product.option.edit: オプションを編集
productoption.admin.product.option.sortable: オプションの順番はドラッグ＆ドロップでも変更可能です。
productoption.admin.product.option.no_item: オプションがありません。
productoption.admin.product.option.copy: 管理名をコピー
productoption.admin.product.option.input_range: 入力範囲
productoption.admin.product.option.info: オプション情報
productoption.admin.product.option.category.list: オプション一覧
productoption.admin.product.option.category.sortable: 選択肢の順番はドラッグ＆ドロップでも変更可能です。
productoption.admin.product.option.category.no_item: 選択肢がありません。
productoption.admin.product.option.category.name: 選択肢名
productoption.admin.product.option.category.description: 説明文
productoption.admin.product.option.category.image: 画像
productoption.admin.product.option.category.disable_flg: 未選択設定
productoption.admin.product.option.category.disable_disp: 未選択肢
productoption.admin.product.option.category.init_flg: 初期値設定
productoption.admin.product.option.category.init_disp: 初期値
productoption.admin.product.option.category.price: 金額
productoption.admin.product.option.category.delivery_free_flg: 送料無料
productoption.admin.product.option.category.placeholder: 説明文(placeholder)
productoption.admin.product.option.category.multiple: 数量の金額反映
productoption.admin.product.option.category.detail: 詳細設定
productoption.admin.product.option.option.disp: 説明画面
productoption.admin.product.option.option.rank.assign: オプション割り当て
productoption.admin.product.option.option.rank.sort: オプション並び替え
productoption.admin.product.option.modal.header: オプションを削除します。
productoption.admin.product.option.modal.body: オプションは一覧（マスター）から削除されますが、これまでの取引等のデータから消えることはありません。この操作はあとから取り消すことができません。このオプションを削除しますか？
productoption.admin.product.option.category.modal.header: 選択肢を削除します。
productoption.admin.product.option.category.modal.body: 選択肢は一覧（マスター）から削除されますが、これまでの取引等のデータから消えることはありません。この操作はあとから取り消すことができません。この選択肢を削除しますか？
productoption.admin.content.design.reset: 初期値に戻す
productoption.admin.content.option.title: オプション選択部テンプレート編集
productoption.admin.content.description.title: オプション説明モーダルテンプレート編集
productoption.admin.content.css.title: オプションCSS編集
productoption.admin.content.label.option: オプション選択部デザイン
productoption.admin.content.label.description: オプション説明モーダルデザイン
productoption.admin.content.label.css: オプションCSS
productoption.admin.content.design.description.option: 商品一覧・商品詳細ページにオプションが表示されない場合はご希望される位置に下記のタグを挿入されてください。
productoption.admin.content.design.description.description: 商品一覧・商品詳細ページにが説明モーダル表示されない場合はご希望される位置に下記のタグを挿入されてください。
productoption.admin.config.title: プラグイン設定
productoption.admin.config.subtitle: 商品オプション設定
productoption.admin.config.label.range: 送料無料判定
productoption.admin.config.label.range.all: 全商品を対象に判定
productoption.admin.config.label.range.shipping: お届け先ごとに判定

productoption.product.option.description.title: 詳細説明
productoption.product.option.description.price: 価格
productoption.product.option.description.select: 選択する
productoption.product.option.description.add_tax: + 税
productoption.product.option.description.inc_tax: (税込)
productoption.product.option.price_header: オプション価格：¥

productoption.csv.common.label: オプション情報
productoption.csv.product.label.id: オプション割当情報
productoption.csv.product.label.name: オプション割当情報(名称)

productoption.admin.product.product_csv.product_assign_description: オプションIDを(,)区切りで入力
productoption.admin.product.product_csv.not_correct: '%line%行目の%name%が正しく入力されていません。'

# form
productoption.option.type.select: プルダウン
productoption.option.type.radio: ラジオボタン
productoption.option.type.checkbox: チェックボックス
productoption.option.type.text: テキストボックス
productoption.option.type.textarea: テキストエリア
productoption.option.type.date: 日付
productoption.option.type.number: 数値入力
productoption.option.disp.off: 表示しない
productoption.option.disp.on: 表示する
productoption.option.category.delivery_free.off: 設定なし
productoption.option.category.delivery_free.on: 無料設定
productoption.option.category.multiple.off: 反映しない
productoption.option.category.multiple.on: 反映する

# flash message
admin.product.option.up.complete: オプションを上へ移動しました。
admin.product.option.up.error: オプションを上へ移動できませんでした。
admin.product.option.down.complete: オプションを下へ移動しました。
admin.product.option.down.error: オプションを下へ移動できませんでした。
admin.product.option.save.complete: オプションを保存しました。
admin.product.option.save.error: オプションを保存できませんでした。
admin.product.option.delete.complete: オプションを削除しました。
admin.product.option.delete.error: オプションを削除できませんでした。
admin.product.option_category.up.complete: 選択肢を上へ移動しました。
admin.product.option_category.up.error: 選択肢を上へ移動できませんでした。
admin.product.option_category.down.complete: 選択肢を下へ移動しました。
admin.product.option_category.down.error: 選択肢を下へ移動できませんでした。
admin.product.option_category.save.complete: 選択肢を保存しました。
admin.product.option_category.save.error: 選択肢を保存できませんでした。
admin.product.option_category.delete.complete: 選択肢を削除しました。
admin.product.option_category.delete.error: 選択肢を削除できませんでした。
admin.product.option_text_category.save.complete: 詳細を保存しました。
admin.product.option_text_category.save.error: 詳細を保存できませんでした。
admin.product.product_option.complete: オプションを登録しました。
admin.setting.productoption.save.complete: 設定を登録しました。
admin.content.productoption.save.complete: 登録が完了しました。

# validation
productoption.type.range.invalid: 指定範囲を正しく設定してください。
productoption.type.minus.invalid: 0以上を指定してください。
productoption.type.image.path.error: 画像のパスが不正です。
productoption.option.cart.error.check: チェックされていません。
productoption.option.cart.error.min: '%num%つ選択してください。'
productoption.option.cart.error.max: '%num%つ以上選択してください。'
productoption.option.cart.error.limit: '選択できるのは%num%つまでです。'", "ProductOption/Resource/locale/messages.ja.yaml", "/var/www/htdocs/ec922501/app/Plugin/ProductOption/Resource/locale/messages.ja.yaml");
    }
}
