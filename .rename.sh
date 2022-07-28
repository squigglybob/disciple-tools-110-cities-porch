find ./ -type f -exec sed -i -e 's|Disciple_Tools_110_Cities_Porch|Disciple_Tools_110_Cities_Porch|g' {} \;
find ./ -type f -exec sed -i -e 's|disciple_tools_110_cities_porch|disciple_tools_110_cities_porch|g' {} \;
find ./ -type f -exec sed -i -e 's|disciple-tools-110-cities-porch|disciple-tools-110-cities-porch|g' {} \;
find ./ -type f -exec sed -i -e 's|starter_post_type|starter_post_type|g' {} \;
find ./ -type f -exec sed -i -e 's|110 Cities Porch|110 Cities Porch|g' {} \;
mv disciple-tools-110-cities-porch.php disciple-tools-110-cities-porch.php
rm .rename.sh
