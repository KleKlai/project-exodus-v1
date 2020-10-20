<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Model\About;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ultrices egestas felis laoreet congue. Cras eget elit interdum urna luctus scelerisque. Vestibulum interdum, tellus in dignissim placerat, augue sem elementum est, sit amet luctus libero neque eget magna. Nunc faucibus dignissim est, ut ornare nulla suscipit non. Nunc egestas nibh et magna pharetra, vel tempor eros sodales. Nunc quis est auctor, dapibus massa eget, pretium massa. Ut vel hendrerit quam, id pellentesque sem.

        Donec vel mauris finibus, pulvinar quam quis, pellentesque enim. Sed tincidunt mattis felis sed blandit. Sed faucibus nulla sit amet nulla efficitur, nec pellentesque turpis tristique. Ut finibus magna ut lorem semper, ut consequat nunc tincidunt. Curabitur pretium cursus sem vitae convallis. Nam convallis lacus et neque pellentesque aliquet. Donec posuere enim non pretium suscipit. Duis neque leo, aliquam sit amet rhoncus sit amet, convallis id ex. Nam mattis sit amet lorem at mollis. Nulla purus dolor, ultricies sit amet turpis nec, condimentum molestie erat. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nunc erat quam, lacinia et mi id, vehicula maximus orci.

        Morbi dignissim orci eget nisi imperdiet, in semper est rutrum. Sed turpis lorem, aliquet ut eleifend suscipit, lobortis sed est. Aenean non finibus nisi. Vivamus vulputate nibh sed orci lobortis, ut ullamcorper sem congue. Integer lobortis arcu quis sapien aliquet tincidunt. Suspendisse urna est, malesuada quis dolor quis, pharetra congue quam. Fusce consectetur a enim a pellentesque. Praesent et elit vitae justo pharetra ultricies ut vitae nisi. Suspendisse iaculis gravida lacus. Donec in quam eget arcu scelerisque malesuada eu id dolor. Ut ac fringilla elit. Nunc vitae placerat nibh, sit amet gravida neque.

        Cras consequat dictum lectus. Maecenas augue erat, suscipit ac massa in, aliquet hendrerit eros. Nunc tristique mauris viverra molestie hendrerit. Nullam in massa hendrerit, blandit arcu ac, tristique ante. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Quisque maximus rhoncus ex eget sagittis. Quisque eu est nulla. Donec ligula arcu, dignissim ac purus et, posuere malesuada erat. Duis sollicitudin ornare justo eget congue. Donec laoreet felis orci, quis rhoncus urna consectetur a. Vivamus scelerisque blandit tincidunt. Duis ultricies tellus molestie purus congue, eget tincidunt ligula accumsan. Nunc in nibh arcu. Maecenas ultrices massa ut risus tristique auctor. Fusce at ligula porttitor, dignissim neque in, auctor orci. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.

        Pellentesque quis pharetra nisi. Duis pretium sapien cursus, vehicula nisl quis, luctus nunc. Donec porta congue metus, vitae rutrum nunc viverra in. Phasellus congue molestie libero a sodales. Maecenas quis ultrices enim. Praesent auctor mauris nisl, ut fringilla neque viverra eu. Fusce volutpat vulputate justo vitae consequat. Phasellus lacus erat, iaculis id mollis eget, finibus vitae dui. Fusce dapibus, tortor vitae dictum iaculis, quam nisl tincidunt tortor, eget pulvinar est augue vitae dolor. Sed feugiat mattis turpis, at vehicula massa convallis nec. Duis eu nisi nisl. Donec scelerisque sed magna eget aliquam. Pellentesque consequat dolor eu libero vehicula, feugiat faucibus arcu semper. Sed porttitor vehicula porta. Ut et arcu tincidunt orci iaculis porta.";

        About::create([
            'about' =>  $data,
        ]);
    }
}
