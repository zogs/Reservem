<?php

namespace Zogs\MailerBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class MailerTestCommand extends ContainerAwareCommand
{
    private $output;

    protected function configure()
    {
        $this
        ->setName('mailer:test')
        ->addArgument('to', InputArgument::REQUIRED, 'To whom?')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {

        $res = $this->getContainer()->get('z_mailer')->sendTestMessage($input->getArgument('to'));
        $output->writeln($res);
      
    }

}