# Generated by Django 5.0 on 2023-12-14 19:36

from django.db import migrations, models


class Migration(migrations.Migration):

    dependencies = [
        ('produto', '0004_alter_produto_preco_marketing_promocional'),
    ]

    operations = [
        migrations.AlterField(
            model_name='produto',
            name='preco_marketing_promocional',
            field=models.FloatField(verbose_name='Preço Promo'),
        ),
    ]
