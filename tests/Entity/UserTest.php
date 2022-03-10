<?php

namespace App\Tests\Entity;

use App\Entity\Task;
use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class UserTest extends WebTestCase
{
    private $user;
    private $task;

    public function setUp(): void
    {
        $this->user = new User();
        $this->task = new Task();
    }

    public function testId(): void
    {
        $this->assertNull($this->user->getId());
    }

    public function testUsername(): void
    {
        $this->user->setUsername('name');
        $this->assertSame('name', $this->user->getUsername());
    }

    public function testPassword(): void
    {
        $this->user->setPassword('password');
        $this->assertSame('password', $this->user->getPassword());
    }
    public function testConfirm_password(): void
    {
        $this->user->setPassword('confirm_password');
        $this->assertSame('confirm_password', $this->user->getPassword());
    }
    public function testSalt(): void
    {
        $this->assertNull($this->user->getSalt());
    }

    public function testEraseCredentials(): void
    {
        $this->assertNull($this->user->eraseCredentials());
    }

    public function testEmail(): void
    {
        $this->user->setEmail('vincent@ndd.fr');
        $this->assertSame('vincent@ndd.fr', $this->user->getEmail());
    }

    public function testRoles(): void
    {
        $this->user->setRoles(['ROLE_USER']);
        $this->assertSame(['ROLE_USER'], $this->user->getRoles());
    }

    public function testGetAddTask(): void
    {

        $this->user->addTasks(new Task());
        $this->assertInstanceOf(Task::class, $this->user->getTasks());
    }

    // public function testRemoveTask(): void
    // {

    //     $task = new Task();
    //     $this->user->addTasks($task);
    //     $this->user->removeTask($task);
    //     $this->assertIsArray($task, $this->user->getTasks());
    // }

    public function testCreatedAt(): void
    {
        $date = new \DateTimeImmutable();
        $this->user->setCreatedAt($date);
        $this->assertSame($date, $this->user->getCreatedAt());
    }

    public function testIsVerified(): void
    {
        $this->user->setIsVerified(true);
        $this->assertis(true, $this->user->isVerified());
    }
}
