<?php

namespace App\Actions\PostoTrabalho;

use App\DTO\PostoTrabalho\PostoTrabalhoUpdateDTO;
use App\Repositories\PostoTrabalho\PostoTrabalhoRepositoryInterface;

class PostoTrabalhoUpdateAction {

    public function __construct(
        protected PostoTrabalhoRepositoryInterface $postoTrabalhoRepository
    )
    { }

    public function exec(PostoTrabalhoUpdateDTO $dto): array
    {
        $postoTrabalho = $this->postoTrabalhoRepository->update($dto);

        return [
            "postoTrabalho" => $postoTrabalho,
        ];
    }
}
