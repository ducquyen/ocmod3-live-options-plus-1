# Live Options+
#
# The Live Options+ extension is for CMS Opencart 3.x.
# It allows to display live total price of product and its options in accordance with the specified options
# and quantity, also adds ability to use the equal sign as option prefix and another features.
#
# @author       Andrii Burkatskyi aka underr underr.ua@gmail.com
# @copyright    Copyright (c) 2019 Andrii Burkatskyi
# @license		https://raw.githubusercontent.com/underr-ua/ocmod3-live-options-plus/master/EULA.txt End-User License Agreement
#
# @version      1.4
#
# @see          https://www.opencart.com/index.php?route=marketplace/extension/info&extension_id=36005
# @see          https://underr.space/en/notes/projects/project-014.html
# @see          https://github.com/underr-ua/ocmod3-live-options-plus

zip=$(shell basename `pwd`).ocmod.zip

eula=EULA.txt
readme=README.md
datetime=201901010000.00
src=src
bin=bin


all: checkg clean makedir timestamp makezip hideg

checkg:
	@if [ ! -f "hideg.pwd" ]; then hideg; fi

makedir:
	mkdir -p "$(bin)"

timestamp:
	find . -exec touch -a -m -t $(datetime) {} \;

makezip:
	cd "$(src)" && zip -9qrX "../$(bin)/$(zip)" * && cd .. && zip -9qrX "$(bin)/$(zip)" "$(readme)" "$(eula)"

hideg: hideg.pwd
	hideg "$(bin)/$(zip)"

clean:
	@echo Cleaning...
	@rm -f "$(bin)"/*.*
	@rm -f "$(bin)"/*.zip
