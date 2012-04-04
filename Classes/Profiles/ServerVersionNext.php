<?php

namespace Predis\Profiles;

class ServerVersionNext extends ServerVersion22 {
    public function getVersion() { return '2.4'; }
    public function getSupportedCommands() {
        return array_merge(parent::getSupportedCommands(), array(
            /* commands operating on lists */
            'rpush'                     => '\Predis\Commands\ListPushTailV24x',
            'lpush'                     => '\Predis\Commands\ListPushHeadV24x',

            /* commands operating on sets */
            'sadd'                      => '\Predis\Commands\SetAddV24x',
            'srem'                      => '\Predis\Commands\SetRemoveV24x',

            /* commands operating on hashes */
            'hdel'                      => '\Predis\Commands\HashDeleteV24x',

            /* remote server control commands */
            'info'                      => '\Predis\Commands\ServerInfoV24x',
            'client'                    => '\Predis\Commands\ServerClient',
        ));
    }
}
